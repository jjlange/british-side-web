<?php
/**
 * Copyright (c) 2018, British Side.
 * All Rights Reserved.
 *
 *
 * @author Justin Lange
 **/

session_unset();
session_destroy($_SESSION['AccountID']);
header("Location: /");