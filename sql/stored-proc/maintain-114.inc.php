<?php
/***************************************************************************
 * for license information see LICENSE.md
 *
 *
 *  initialize trigger version function
 ***************************************************************************/

// We run this via maintain.php instead of dbsv-update.php because the
// latter one has no sufficient privileges yet for updating functions
// (should be changed / may have been changed when you are reading this.)

sql_dropFunction('dbsvTriggerVersion');
sql(
    'CREATE FUNCTION `dbsvTriggerVersion` () RETURNS INT
     RETURN 114'
);
