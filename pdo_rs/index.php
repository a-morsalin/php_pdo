<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/12/2017
 * Time: 5:55 PM
 */

#why use PDO?
//choice of two methods : mysqli or PDO
//mysql_* commands are deprecated and should no longer be used
// PDO and mysqli are equivalent interms od security
    /*
     * both support prepared statements
     * no risk of SQL injection
     * */
// Unlike mysqli PDO supports named  parameters {this makes working with database fields easier}
// Unlike mysqli, PDO supports many different database vendors
// Secure, flexible, easy
// best choice for all new projects and updates
