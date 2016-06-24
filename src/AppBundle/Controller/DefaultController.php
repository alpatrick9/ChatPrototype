<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Form\CommentType;
use AppBundle\Model\RefreshStatus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        /**
         * @var $comments Comment[]
         */
        $comments = $this->getDoctrine()->getManager()->getRepository('AppBundle:Comment')->findAll();

        if($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirect($this->generateUrl('homepage'));
        }
        return $this->render('default/index.html.twig', [
            'form'=>$form->createView(),
            'comments'=>$comments
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse|Response
     * @Route("/refresh-comment", name="refresh_comment")
     * @Method({"POST"})
     */
    public function refreshComment(Request $request) {
        if($request->isXmlHttpRequest()) {
            $status = new RefreshStatus();
            $nbComment = $request->get('nbComment');
            $newNbcomment = $this->getDoctrine()->getManager()->getRepository('AppBundle:Comment')->countComment();
            if($newNbcomment != $nbComment) {
                $status->status = true;
            }
            return new JsonResponse(json_encode($status));
        }
        return new Response("Erreur: ce n'est pas une requête Ajax", 400);
    }
}
