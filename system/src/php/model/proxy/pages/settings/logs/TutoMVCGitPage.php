<?php
namespace tutomvc;

class TutoMVCGitPage extends AdminMenuPage
{
  const NAME = "tutomvc/git";


  function __construct()
  {
    parent::__construct( __( "Repository" ), __( "Repository" ), "manage_options", self::NAME );
  }

  function getContentMediatorName()
  {
    return TutoMVCGitContentMediator::NAME;
  }

  function onLoad()
  {
    do_action( TutoMVCGitContentMediator::ACTION_DISPLAY_STATUS );
  }
}