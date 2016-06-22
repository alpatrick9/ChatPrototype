<?php

/* default/index.html.twig */
class __TwigTemplate_5421b2627ceff96df7d8d686807bb1a5f0f2a06e679e8748da579013b104351d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f5cceba5849e67d6f9d02861d2723c400dd7f08db5fddbb9d518bbca6a2ca20 = $this->env->getExtension("native_profiler");
        $__internal_6f5cceba5849e67d6f9d02861d2723c400dd7f08db5fddbb9d518bbca6a2ca20->enter($__internal_6f5cceba5849e67d6f9d02861d2723c400dd7f08db5fddbb9d518bbca6a2ca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<h2>Google Map</h2>
<div id=\"map\" style=\"height: 75%;\"></div>
<script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyCMgUSck-AZgrB_2bjb7iWCAj-Jx8hNe7Y"), "html", null, true);
        echo "\"></script>
<script>
    var myLatLng;
    function initialise() {
        myLatLng = {lat: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")), "html", null, true);
        echo "};
        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var mapOptions = {
            zoom: 8,
            center: myLatLng,
            mapTypeId: google.maps.MapTypeId.HYBRID
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatLng,
            title: '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "',
            icon: iconBase + 'schools_maps.png'
        });

        var marker2 = new google.maps.Marker({
            position: {lat: myLatLng.lat+0.1, lng: myLatLng.lng},
            title: '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "',
        });

        marker.setMap(map);
        marker2.setMap(map);
        marker.addListener('click', toggleBounce);
    }
    google.maps.event.addDomListener(window, 'load', initialise);

    function toggleBounce() {
        alert('lat: '+myLatLng.lat +'\\n'+'lng: '+myLatLng.lng);
    }
</script>";
        
        $__internal_6f5cceba5849e67d6f9d02861d2723c400dd7f08db5fddbb9d518bbca6a2ca20->leave($__internal_6f5cceba5849e67d6f9d02861d2723c400dd7f08db5fddbb9d518bbca6a2ca20_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 23,  48 => 17,  33 => 7,  26 => 3,  22 => 1,);
    }
}
/* <h2>Google Map</h2>*/
/* <div id="map" style="height: 75%;"></div>*/
/* <script type="text/javascript" src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCMgUSck-AZgrB_2bjb7iWCAj-Jx8hNe7Y') }}"></script>*/
/* <script>*/
/*     var myLatLng;*/
/*     function initialise() {*/
/*         myLatLng = {lat: {{ lat }}, lng: {{ lng }}};*/
/*         var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';*/
/*         var mapOptions = {*/
/*             zoom: 8,*/
/*             center: myLatLng,*/
/*             mapTypeId: google.maps.MapTypeId.HYBRID*/
/*         }*/
/*         var map = new google.maps.Map(document.getElementById('map'), mapOptions);*/
/*         var marker = new google.maps.Marker({*/
/*             position: myLatLng,*/
/*             title: '{{ title }}',*/
/*             icon: iconBase + 'schools_maps.png'*/
/*         });*/
/* */
/*         var marker2 = new google.maps.Marker({*/
/*             position: {lat: myLatLng.lat+0.1, lng: myLatLng.lng},*/
/*             title: '{{ title }}',*/
/*         });*/
/* */
/*         marker.setMap(map);*/
/*         marker2.setMap(map);*/
/*         marker.addListener('click', toggleBounce);*/
/*     }*/
/*     google.maps.event.addDomListener(window, 'load', initialise);*/
/* */
/*     function toggleBounce() {*/
/*         alert('lat: '+myLatLng.lat +'\n'+'lng: '+myLatLng.lng);*/
/*     }*/
/* </script>*/
