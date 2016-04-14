<?php
// Get a variable name as string.
// @author Kolier.Li

// @link http://stackoverflow.com/a/4034225
function variable_name( &$var, $scope=false, $prefix='UNIQUE', $suffix='VARIABLE' ) {
  if($scope) {
    $vals = $scope;
  } else {
    $vals = $GLOBALS;
  }
  $old = $var;
  $var = $new = $prefix.rand().$suffix;
  $vname = FALSE;
  foreach($vals as $key => $val) {
    if($val === $new) $vname = $key;
  }
  $var = $old;
  return $vname;
}

// @link http://stackoverflow.com/a/6837836
function catch_param( $label ) {
  $bt = debug_backtrace();
  $src = file($bt[0]["file"]);
  $line = $src[ $bt[0]['line'] - 1 ];

  // let's match the function call and the last closing bracket
  preg_match( "#catch_param\((.+)\)#", $line, $match );

  /* let's count brackets to see how many of them actually belongs
     to the var name
     Eg:   die(catch_param($this->getUser()->hasCredential("delete")));
            We want:       $this->getUser()->hasCredential("delete")
  */
  $max = strlen($match[1]);
  $varname = "";
  $c = 0;
  for($i = 0; $i < $max; $i++){
    if(     $match[1]{$i} == "(" ) $c++;
    elseif( $match[1]{$i} == ")" ) $c--;
    if($c < 0) break;
    $varname .=  $match[1]{$i};
  }

  // $varname now holds the name of the passed variable ('$' included)
  // Eg:   catch_param($hello)
  //             => $varname = "$hello"
  // or the whole expression evaluated
  // Eg:   catch_param($this->getUser()->hasCredential("delete"))
  //             => $varname = "$this->getUser()->hasCredential(\"delete\")"

  echo("The passed expression is: ".$varname);

}