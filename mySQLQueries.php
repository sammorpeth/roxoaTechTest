<?php

$query = 'SELECT P.firstName, P.lastName, D.name
          FROM personnel AS P
          INNER JOIN department AS D
          WHERE p.id = d.id';

// This join, known as an inner join, would return all records that match from both tables. So for example it would find all the records 
// where a department id matched an employees department id. 


$query = 'SELECT P.firstName, P.lastName, D.name
          FROM personnel AS P
          LEFT JOIN department AS D
          ON p.id = d.id';

// A left join returns all records from the 'left table' (the first one declared after LEFT JOIN) and any which match on the other table. 
// So for example it would return first names and last names for every record, but return NULL for anything which does not match on the 
// table on the 'right'

$query = 'SELECT P.firstName, P.lastName, D.name
          FROM department AS P
          RIGHT JOIN personnel AS D
          ON p.id = d.id';

// A right join is essentially the opposite of a left join. It would return all of the records in the right table, and return NULL for anything
// that did not match on the left. 
?>