<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 28.06.2018
 * Time: 22:48
 */
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionRun(){

        $am = \Yii::$app->authManager;

        $admin = $am->createRole('admin');
        $user = $am->createRole('user');
        $guest = $am->createRole('guest');

        $admin->description = 'admin';
        $user->description = 'user';
        $guest->description = 'guest';

        $am->add($admin);
        $am->add($user);
        $am->add($guest);

        $operationCrudCreate = $am->createPermission('crud_create');
        $operationCrudUpdate = $am->createPermission('crud_update');
        $operationCrudDelete = $am->createPermission('crud_delete');
        $operationUpdateStatus = $am->createPermission('update_status');
        $operationUpdateRole = $am->createPermission('update_role');
        $operationShowAdminMenu = $am->createPermission('view_admin_menu');
        $operationViewCommand = $am->createPermission('view_command');
        $operationViewTask = $am->createPermission('view_task');
        $operationCreateComment = $am->createPermission('create_comment');
        $operationDeleteComment = $am->createPermission('delete_comment');
        $operationUpdateComment = $am->createPermission('update_comment');

        $am->add($operationCrudCreate);
        $am->add($operationCrudUpdate);
        $am->add($operationCrudDelete);
        $am->add($operationShowAdminMenu);
        $am->add($operationViewCommand);
        $am->add($operationUpdateStatus);
        $am->add($operationUpdateRole);
        $am->add($operationViewTask);
        $am->add($operationCreateComment);
        $am->add($operationDeleteComment);
        $am->add($operationUpdateComment);


        $am->addChild($admin, $operationCrudCreate);
        $am->addChild($admin, $operationCrudUpdate);
        $am->addChild($admin, $operationCrudDelete);
        $am->addChild($admin, $operationShowAdminMenu);
        $am->addChild($admin, $operationViewCommand);
        $am->addChild($admin, $operationUpdateStatus);
        $am->addChild($admin, $operationUpdateRole);
        $am->addChild($admin, $operationViewTask);
        $am->addChild($admin, $operationCreateComment);
        $am->addChild($admin, $operationDeleteComment);
        $am->addChild($admin, $operationUpdateComment);

        $am->addChild($user, $operationViewCommand);
        $am->addChild($user, $operationUpdateStatus);
        $am->addChild($user, $operationViewTask);
        $am->addChild($user, $operationCreateComment);
        $am->addChild($user, $operationDeleteComment);
        $am->addChild($user, $operationUpdateComment);




    }


}