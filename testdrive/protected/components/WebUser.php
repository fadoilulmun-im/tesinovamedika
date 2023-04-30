<?php

class WebUser extends CWebUser
{
  public function isAdmin()
  {
    $userRole = $this->getState('role');
    // echo '<pre>';
    // print_r($this);
    // die();
    return ($userRole === 'admin');
  }

  public function isUser()
  {
    $userRole = $this->getState('role');
    return ($userRole === 'user');
  }
}
