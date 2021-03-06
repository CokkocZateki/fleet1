<?php
require_once('auth.php');
require_once('config.php');
require_once('loadclasses.php');

$page = new Page('Register Fleet');

if (!isset($_SESSION['characterID'])) {
  $page->setError("You are not logged in.");
  $page->display();
  exit;
}

if (count(FC_PILOTS) || count(FC_CORPS) || count(FC_ALLYS)) {
    $allowed=false;
    if (in_array($_SESSION['characterID'], FC_PILOTS)) {
        $allowed=true;
    } elseif (in_array($corpID = ESIPILOT::getCorpForChar($_SESSION['characterID']), FC_CORPS)) {
        $allowed=true;
    } elseif (in_array(ESIPILOT::getAllyForCorp($corpID), FC_ALLYS)) {
        $allowed=true;
    }
    if (!$allowed) {
        $page->setError('Only certain Pilots, Corps or Alliances are allowed to register fleets.');
        $page->display();
        exit;
    }
}

if (isset($_GET['fleetlink'])) {
    $fleet = new ESISSO(null, $_SESSION['characterID']);
    $scopes = $fleet->getScopes();

    if (in_array('esi-fleets.read_fleet.v1', $scopes) && in_array( 'esi-fleets.write_fleet.v1', $scopes)) {
        preg_match('/(?<=fleets\/)([0-9]*)/', $_GET['fleetlink'], $fleetmatch);
        if (!count($fleetmatch)) {
            $page->setError('No valid fleet link.');
            $page->display();
            exit;
        }
        $fleetid = $fleetmatch[0];
        $_SESSION['fleetID'] = $fleetid;
        header('Location: '.URL::url_path().'fleet.php');
    } else {
        header('Location: '.URL::url_path().'login.php?login=fc&fleetlink='.$_GET['fleetlink']);
    }
} else {
    $html = '<form action="" method="get">
           <div class="form-group col-xs-12 col-md-6">
             <input type="hidden" name="login" value="fc">
             <div class="input-group row">
               <span class="input-group-addon"><i class="glyphicon glyphicon-knight"></i></span>
               <input class="form-control" type="text" id="fleetlink" name="fleetlink" placeholder="Paste your external fleet link.">
             </div>
             <div class="input-group row">
               <br/><button type="submit" class="btn btn-primary">Submit</button>
             </div>
             <div class="row">
               <br/><p>Here\'s how to get the fleet link:</p>
               <img class="img-responsive" src="img/copyfleet.png">
             </div>
           </div>
         </form>';
    $page->addBody($html);
    $page->display();
    exit;
}
?>
