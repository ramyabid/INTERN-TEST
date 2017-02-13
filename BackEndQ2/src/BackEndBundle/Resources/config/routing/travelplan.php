<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('travelplan_index', new Route(
    '/',
    array('_controller' => 'BackEndBundle:TravelPlan:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('travelplan_show', new Route(
    '/{id}/show',
    array('_controller' => 'BackEndBundle:TravelPlan:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('travelplan_new', new Route(
    '/new',
    array('_controller' => 'BackEndBundle:TravelPlan:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('travelplan_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'BackEndBundle:TravelPlan:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('travelplan_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'BackEndBundle:TravelPlan:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
