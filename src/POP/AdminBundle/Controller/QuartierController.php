<?php

namespace POP\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use POP\AdminBundle\Entity\Quartier;
use POP\AdminBundle\Form\QuartierType;

/**
 * Quartier controller.
 *
 */
class QuartierController extends Controller
{
    /**
     * Lists all Quartier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $quartiers = $em->getRepository('POPAdminBundle:Quartier')->findAll();

        return $this->render('POPAdminBundle:Quartier:index.html.twig', array(
            'quartiers' => $quartiers,
        ));
    }

    /**
     * Creates a new Quartier entity.
     *
     */
    public function newAction(Request $request)
    {
        $quartier = new Quartier();
        $form = $this->createForm('POP\AdminBundle\Form\QuartierType', $quartier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quartier);
            $em->flush();

            return $this->redirectToRoute('quartier_show', array('id' => $quartier->getId()));
        }

        return $this->render('POPAdminBundle:Quartier:new.html.twig', array(
            'quartier' => $quartier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Quartier entity.
     *
     */
    public function showAction(Quartier $quartier)
    {
        $deleteForm = $this->createDeleteForm($quartier);

        return $this->render('POPAdminBundle:Quartier:show.html.twig', array(
            'quartier' => $quartier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Quartier entity.
     *
     */
    public function editAction(Request $request, Quartier $quartier)
    {
        $deleteForm = $this->createDeleteForm($quartier);
        $editForm = $this->createForm('POP\AdminBundle\Form\QuartierType', $quartier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quartier);
            $em->flush();

            return $this->redirectToRoute('quartier_edit', array('id' => $quartier->getId()));
        }

        return $this->render('POPAdminBundle:Quartier:edit.html.twig', array(
            'quartier' => $quartier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Quartier entity.
     *
     */
    public function deleteAction(Request $request, Quartier $quartier)
    {
        $form = $this->createDeleteForm($quartier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quartier);
            $em->flush();
        }

        return $this->redirectToRoute('quartier_index');
    }

    /**
     * Creates a form to delete a Quartier entity.
     *
     * @param Quartier $quartier The Quartier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Quartier $quartier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quartier_delete', array('id' => $quartier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
