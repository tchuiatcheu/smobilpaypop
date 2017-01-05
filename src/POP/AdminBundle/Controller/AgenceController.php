<?php

namespace POP\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use POP\AdminBundle\Entity\Agence;
use POP\AdminBundle\Form\AgenceType;

/**
 * Agence controller.
 *
 */
class AgenceController extends Controller
{
    /**
     * Lists all Agence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agences = $em->getRepository('POPAdminBundle:Agence')->findAll();

        return $this->render('POPAdminBundle:Agence:index.html.twig', array(
            'agences' => $agences,
        ));
    }

    /**
     * Creates a new Agence entity.
     *
     */
    public function newAction(Request $request)
    {
        $agence = new Agence();
        $form = $this->createForm('POP\AdminBundle\Form\AgenceType', $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agence);
            $em->flush();

            return $this->redirectToRoute('agence_show', array('id' => $agence->getId()));
        }

        return $this->render('POPAdminBundle:Agence:new.html.twig', array(
            'agence' => $agence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Agence entity.
     *
     */
    public function showAction(Agence $agence)
    {
        $deleteForm = $this->createDeleteForm($agence);

        return $this->render('POPAdminBundle:Agence:show.html.twig', array(
            'agence' => $agence,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Agence entity.
     *
     */
    public function editAction(Request $request, Agence $agence)
    {
        $deleteForm = $this->createDeleteForm($agence);
        $editForm = $this->createForm('POP\AdminBundle\Form\AgenceType', $agence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agence);
            $em->flush();

            return $this->redirectToRoute('agence_edit', array('id' => $agence->getId()));
        }

        return $this->render('POPAdminBundle:Agence:edit.html.twig', array(
            'agence' => $agence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Agence entity.
     *
     */
    public function deleteAction(Request $request, Agence $agence)
    {
        $form = $this->createDeleteForm($agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agence);
            $em->flush();
        }

        return $this->redirectToRoute('agence_index');
    }

    /**
     * Creates a form to delete a Agence entity.
     *
     * @param Agence $agence The Agence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agence $agence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agence_delete', array('id' => $agence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
