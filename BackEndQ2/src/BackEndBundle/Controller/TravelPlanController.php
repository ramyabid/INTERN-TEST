<?php

namespace BackEndBundle\Controller;

use BackEndBundle\Entity\TravelPlan;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Travelplan controller.
 *
 */
class TravelPlanController extends Controller
{
    /**
     * Lists all travelPlan entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $travelPlans = $em->getRepository('BackEndBundle:TravelPlan')->findAll();

        return $this->render('travelplan/index.html.twig', array(
            'travelPlans' => $travelPlans,
        ));
    }

    /**
     * Creates a new travelPlan entity.
     *
     */
    public function newAction(Request $request)
    {
        $travelPlan = new Travelplan();
        $form = $this->createForm('BackEndBundle\Form\TravelPlanType', $travelPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($travelPlan);
            $em->flush($travelPlan);

            return $this->redirectToRoute('travelplan_show', array('id' => $travelPlan->getId()));
        }

        return $this->render('travelplan/new.html.twig', array(
            'travelPlan' => $travelPlan,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a travelPlan entity.
     *
     */
    public function showAction(TravelPlan $travelPlan)
    {
        $deleteForm = $this->createDeleteForm($travelPlan);

        return $this->render('travelplan/show.html.twig', array(
            'travelPlan' => $travelPlan,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing travelPlan entity.
     *
     */
    public function editAction(Request $request, TravelPlan $travelPlan)
    {
        $deleteForm = $this->createDeleteForm($travelPlan);
        $editForm = $this->createForm('BackEndBundle\Form\TravelPlanType', $travelPlan);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('travelplan_edit', array('id' => $travelPlan->getId()));
        }

        return $this->render('travelplan/edit.html.twig', array(
            'travelPlan' => $travelPlan,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a travelPlan entity.
     *
     */
    public function deleteAction(Request $request, TravelPlan $travelPlan)
    {
        $form = $this->createDeleteForm($travelPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($travelPlan);
            $em->flush($travelPlan);
        }

        return $this->redirectToRoute('travelplan_index');
    }

    /**
     * Creates a form to delete a travelPlan entity.
     *
     * @param TravelPlan $travelPlan The travelPlan entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TravelPlan $travelPlan)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('travelplan_delete', array('id' => $travelPlan->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
