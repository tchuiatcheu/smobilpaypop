<?php

namespace POP\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use POP\AdminBundle\Entity\Region;
use POP\AdminBundle\Form\RegionType;

/**
 * Region controller.
 *
 */
class RegionController extends Controller
{
    /**
     * Lists all Region entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $regions = $em->getRepository('POPAdminBundle:Region')->findAll();

        return $this->render('POPAdminBundle:Region:index.html.twig', array(
            'regions' => $regions,
        ));
    }

    /**
     * Creates a new Region entity.
     *
     */
    public function newAction(Request $request)
    {
        $region = new Region();
        $form = $this->createForm('POP\AdminBundle\Form\RegionType', $region);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($region);
            $em->flush();

            return $this->redirectToRoute('region_show', array('id' => $region->getId()));
        }

        return $this->render('POPAdminBundle:Region:new.html.twig', array(
            'Region' => $region,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Region entity.
     *
     */
    public function showAction(Region $region)
    {
        $deleteForm = $this->createDeleteForm($region);

        return $this->render('POPAdminBundle:Region:show.html.twig', array(
            'region' => $region,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Region entity.
     *
     */
    public function editAction(Request $request, Region $region)
    {
        $deleteForm = $this->createDeleteForm($region);
        $editForm = $this->createForm('POP\AdminBundle\Form\RegionType', $region);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($region);
            $em->flush();

            return $this->redirectToRoute('region_edit', array('id' => $region->getId()));
        }

        return $this->render('POPAdminBundle:Region:edit.html.twig', array(
            'Region' => $region,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Region entity.
     *
     */
    public function deleteAction(Request $request, Region $region)
    {
        $form = $this->createDeleteForm($region);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($region);
            $em->flush();
        }

        return $this->redirectToRoute('region_index');
    }

    /**
     * Creates a form to delete a Region entity.
     *
     * @param Region $region The Region entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Region $region)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('region_delete', array('id' => $region->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
