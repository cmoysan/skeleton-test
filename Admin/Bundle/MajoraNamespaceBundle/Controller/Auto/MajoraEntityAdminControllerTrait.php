<?php

/* @MajoraGenerator({"force_generation": true}) */

namespace Gesco\Admin\Bundle\MajoraNamespaceBundle\Controller\Auto;

use Gesco\Si\Component\MajoraNamespace\Entity\MajoraEntity;
use Majora\Bundle\FrameworkExtraBundle\Controller\AdminControllerTrait;
use Majora\Framework\Model\EnablableInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Auto generated controller trait for MajoraEntity entity admin actions.
 *
 * @method render(string $template, array $parameters)
 */
trait MajoraEntityAdminControllerTrait
{
    use AdminControllerTrait;

    /**
     * list all MajoraEntitys.
     *
     * @return Response
     */
    public function listAction()
    {
        return $this->render(
            'GescoAdminMajoraNamespaceBundle:MajoraEntity:list.html.twig',
            array('majoraEntityCollection' => $this->container->get('gesco.majora_entity.loader')->retrieveAll())
        );
    }

    /**
     * create a new MajoraEntity.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(Request $request)
    {
        $form = $this->container->get('form.factory')->create(
            $this->container->get('gesco.majora_entity.form_type'),
            $majoraEntity = new MajoraEntity(),
            array('intention' => 'creation')
        );

        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $this->container->get('gesco.majora_entity.domain')->create(
                    $majoraEntity
                );

                return new RedirectResponse($this->container->get('router')->generate(
                    'gesco_admin_majora_entity_update', array(
                        'id' => $majoraEntity->getId(),
                    )
                ));
            }
        }

        return $this->render(
            'GescoAdminMajoraNamespaceBundle:MajoraEntity:create.html.twig',
            array(
                'form' => $form->createView(),
                'majoraEntity' => $majoraEntity,
            )
        );
    }

    /**
     * update a MajoraEntity.
     *
     * @param MajoraEntity $majoraEntity
     * @param Request      $request
     *
     * @return Response
     */
    public function updateAction(MajoraEntity $majoraEntity, Request $request)
    {
        $form = $this->container->get('form.factory')->create(
            $this->container->get('gesco.majora_entity.form_type'),
            $majoraEntity,
            array('intention' => 'edition')
        );

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $this->container->get('gesco.majora_entity.domain')->edit(
                    $majoraEntity
                );
            }
        }

        return $this->render(
            'GescoAdminMajoraNamespaceBundle:MajoraEntity:update.html.twig',
            array(
                'form' => $form->createView(),
                'majoraEntity' => $majoraEntity,
            )
        );
    }

    /**
     * view details of a MajoraEntity.
     *
     * @param MajoraEntity $majoraEntity
     *
     * @return Response
     */
    public function detailsAction(MajoraEntity $majoraEntity)
    {
        return $this->render(
            'GescoAdminMajoraNamespaceBundle:MajoraEntity:details.html.twig',
            array('majoraEntity' => $majoraEntity)
        );
    }

    /**
     * delete a MajoraEntity.
     *
     * @param MajoraEntity $majoraEntity
     *
     * @return RedirectResponse
     */
    public function deleteAction(MajoraEntity $majoraEntity)
    {
        $this->container->get('gesco.majora_entity.domain')->delete($majoraEntity);

        return new RedirectResponse(
            $this->container->get('router')->generate(
                'gesco_admin_majora_entity_list'
            )
        );
    }

    /**
     * enable a MajoraEntity.
     *
     * @param MajoraEntity $majoraEntity
     * @param Request      $request
     *
     * @return RedirectResponse
     */
    public function enableAction(MajoraEntity $majoraEntity, Request $request)
    {
        if (!$majoraEntity instanceof EnablableInterface) {
            throw new NotFoundHttpException('Cannot enable this MajoraEntity, it must implement Majora\Framework\Model\EnablableInterface.');
        }

        $this->container->get('gesco.majora_entity.domain')->enable($majoraEntity);

        return new RedirectResponse(
            $request->server->get('HTTP_REFERER') ?:
                $this->container->get('router')->generate(
                    'gesco_admin_majora_entity_update',
                    array('id' => $majoraEntity->getId())
                )
        );
    }

    /**
     * disable a MajoraEntity.
     *
     * @param MajoraEntity $majoraEntity
     * @param Request      $request
     *
     * @return RedirectResponse
     */
    public function disableAction(MajoraEntity $majoraEntity, Request $request)
    {
        if (!$majoraEntity instanceof EnablableInterface) {
            throw new NotFoundHttpException('Cannot disable this MajoraEntity, it must implement Majora\Framework\Model\EnablableInterface.');
        }

        $this->container->get('gesco.majora_entity.domain')->disable($majoraEntity);

        return new RedirectResponse(
            $request->server->get('HTTP_REFERER') ?:
                $this->container->get('router')->generate(
                    'gesco_admin_majora_entity_update',
                    array('id' => $majoraEntity->getId())
                )
        );
    }
}
