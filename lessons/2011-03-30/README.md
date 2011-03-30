Note this:

"InnoDB free: 138240 kB; (`emp_no`) REFER `loffelmr/employees`(`emp_no`) ON DELET"

Seems to show that we have a relational constraint that will cascade deletes

Noted this in phpMyAdmin when looking at the salaries table

Sample database with test suite in Launchpad http://bit.ly/i98IrQ

The actual sample db data (bzip): http://bit.ly/eLSAlr
