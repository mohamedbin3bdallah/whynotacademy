<?php

function language($lang)
{
	$arr[' '] = " ";
	$arr[':'] = " : ";
	$arr['/'] = " / ";
	$arr['-'] = " - ";
	$arr['*'] = " * ";
	
	$arr['edit'] = "Edit";
	$arr['delete'] = "Delete";
	$arr['en'] = "English";
	$arr['ar'] = "Arabic";
	$arr['first'] = "First";
	$arr['next'] = "Next";
	$arr['previous'] = "Previous";
	$arr['last'] = "Last";
	$arr['select'] = "Select";
	$arr['more'] = "More";
	$arr['search'] = "Search";
	
	// WhyNot
	$arr['slogan'] = "Extraordinary Is Our Ordinary";
	$arr['copyright'] = "All rights reserved. Designed and developed by";
	$arr['contactslogan'] = "Feel free to contact us";
	$arr['form'] = "Form";
	$arr['home'] = "Home";
	$arr['about'] = "About";
	$arr['address'] = "Address";
	$arr['message'] = "Message";	
	$arr['email'] = "Email";
	$arr['name'] = "Name";
	
	// WhyNot Menu
	$arr['universitycourses'] = "University Courses";
	$arr['othercourses'] = "Other Courses";
	$arr['services'] = "Services";
	$arr['portfolio'] = "Portfolio";
	$arr['contact'] = "Contact";
	$arr['courses'] = "Courses";
	$arr['universities'] = "Universities";

	
	// WhyNot Homepage
	$arr['carousel'] = "Carousel";
	$arr['carouseldata'] = "Carousel Data";
	$arr['newimage'] = "New Image";
	$arr['changeimage'] = "Change Image";
	$arr['nocarousel'] = "There is no image";
	$arr['nocarouseldata'] = "There are no Data";
	$arr['description'] = "Description";
	$arr['save'] = "Save";
	$arr['titleen'] = "English Title";
	$arr['titlear'] = "Arabic Title";
	$arr['descriptionen'] = "English Description";
	$arr['descriptionar'] = "Arabic Description";
	
	
	// WhyNot About
	$arr['body'] = "Who We Are";
	$arr['vision'] = "Our Vision";
	$arr['mission'] = "Our Mission";
	$arr['values'] = "Our Values";
	$arr['logostory'] = "Logo Story";
	$arr['nodata'] = "There are no data";
	$arr['images'] = "Images";
	$arr['data'] = "Data";
	
	//WhyNot Universities
	$arr['newuniversity'] = "New University";
	$arr['university'] = "University";
	$arr['nouniversities'] = "There are no Universities";
	$arr['deleteuniversitymodal'] = "Are You Sure You Want To Delete This University ?";
	
	//WhyNot Faculties
	$arr['newfaculty'] = "New Faculty";
	$arr['faculty'] = "Faculty";
	$arr['faculties'] = "Faculties";
	$arr['nofaculties'] = "There are no Faculties";
	$arr['deletefacultymodal'] = "Are You Sure You Want To Delete This Faculty ?";
	
	//WhyNot University Courses
	$arr['course'] = "Course";
	$arr['coursetype'] = "Course Type";
	$arr['newuniversitycourse'] = "New University Course";
	$arr['nouniversitycourses'] = "There are no University Courses";
	$arr['deleteuniversitycoursemodal'] = "Are You Sure You Want To Delete This University Course ?";
	
	//WhyNot Other Courses
	$arr['newothercourse'] = "New Other Course";
	$arr['noothercourses'] = "There are no Other Courses";
	$arr['deleteothercoursemodal'] = "Are You Sure You Want To Delete This Other Course ?";
	
	// WhyNot Registration
	$arr['register'] = "Register";
	$arr['registration'] = "Registration";
	$arr['cmfpassword'] = "Confirm Password";
	$arr['createnewaccount'] = "Create New Account";
	
	// WhyNot Contact
	$arr['phone'] = "Phone";
	$arr['sphone'] = "Sales No.";
	$arr['facebook'] = "Facebook";
	$arr['twitter'] = "Twitter";
	$arr['googleplus'] = "Google Plus";
	$arr['linkedin'] = "Linked IN";
	$arr['skype'] = "Skype";
	$arr['instagram'] = "Instagram";
	$arr['pinterest'] = "Pinterest";
	$arr['youtube'] = "Youtube";
	$arr['send'] = "Send";
	
	// WhyNot Booking
	$arr['time'] = "Time";
	$arr['book'] = "Book";
	$arr['booking'] = "Booking";
	$arr['nobooking'] = "Therer are no booking data";
	$arr['deletebookingmodal'] = "Are You Sure You Want To Delete This Booking ?";
	
	// Arise Testimonials
	$arr['job'] = "Job";
	$arr['company'] = "company";
	$arr['website'] = "website";
	$arr['testimonials'] = "Testimonials";
	$arr['notestimonials'] = "There Are No Testimonials";
	$arr['newtestimonial'] = "New Testimonial";
	$arr['deletetestimonialmodal'] = "Are You Sure You Want To Delete This Testimonial ?";
	
	// Arise Services
	$arr['all'] = "All";
	$arr['icon'] = "Icon";
	$arr['title'] = "Title";
	$arr['noservices'] = "There Are No Services";
	$arr['categories'] = "Categories";
	$arr['subcategories'] = "SubCategories";
	$arr['services'] = "Services";
	$arr['subservices'] = "SubServices";
	$arr['newcategory'] = "New Category";
	$arr['newsubcategory'] = "New SubCategory";
	$arr['newservice'] = "New Service";
	$arr['newsubservice'] = "New SubService";
	$arr['deletecategorymodal'] = "Are You Sure You Want To Delete This Category ?";
	$arr['deletesubcategorymodal'] = "Are You Sure You Want To Delete This SubCategory ?";
	$arr['deleteservicemodal'] = "Are You Sure You Want To Delete This Service ?";
	$arr['deletesubservicemodal'] = "Are You Sure You Want To Delete This SubService ?";
	
	// Arise Portfolio
	$arr['noprojects'] = "There Are No Projects";
	$arr['newproject'] = "New Project";
	
	$arr['reset'] = "Reset";
	$arr['accept'] = "Accept";
	$arr['year'] = "Years";
	$arr['members'] = "Members";
	$arr['appearto'] = "Appear To";
	
	// Arise Clients	
	$arr['newclient'] = "New Client";
	$arr['clients'] = "Clients";
	$arr['noclients'] = "There Are No Clients";
	$arr['deleteclientmodal'] = "Are You Sure You Want To Delete This Client ?";
	
	// admin
	$arr['countries'] = "Countries";
	$arr['hello'] = "Hello";
	$arr['image'] = "Image";
	$arr['agree'] = "AGREE";
	$arr['no'] = "NO";
	
	
	
	//	designs/forms/login.php
	$arr['nowuser'] = "Current User";
	$arr['username'] = "Username";
	$arr['mobile'] = "Mobile No.";
	$arr['password'] = "Password";
	$arr['remember'] = "Remember Me";
	$arr['close'] = "Close";
	$arr['login'] = "LogIn";
	$arr['logout'] = "LogOut";
	$arr['forgotpass'] = "Forgot Password";
	$arr['wronglogin'] = "Enter the right Username and Password";	
	
	echo $arr[$lang];
}

?>