# Student-Managment-System
A Student Management System is a web-based application developed in PHP for managing various activities related to students in a school or college. This project includes features such as student registration and fee management. The system allows administrators to add, update, and delete student records monitor and add ,vie fee payment record. It also allows teachers/admin to vie the record and he or she can delete the record. The system generates reports for attendance, grades, and student records. The project aims to improve the efficiency of managing student data and provide accurate information for better decision-making by school or college administrators.
For the requirements for the project are XAMPP Server and MYSQL.

All feature like repopulation of form, session handling , concept of cookie,form handling techniques, regex and form validations are implemented in this project.

For the database part Tables like student,admin,class,fee_payments were created. And the foreign key contraint is applied were if any class is deleted then the subsequent students ill also get deleted.If any student record is deleted then the fee-records related to that student will also get deleted.

For class-student foreign key class ID i primary key in class and Foreign key in student is studentclass, and for student-fee foreign key studentID i primary key in student table and foreign key student_id in fee table.


ALTER TABLE `fee table` ADD FOREIGN KEY (`student_id`) REFERENCES `student`(`studenID`) ON DELETE CASCADE ON UPDATE CASCADE;
