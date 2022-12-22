

CREATE TABLE `admin_acc_reg` (
  `admin_acc_id` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_acc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO admin_acc_reg VALUES("6d105m0kw_tepuf7lbq","y2oow50sm_dwjwq25xv","pauloportes.guimalan187@gmail.com","dt187");
INSERT INTO admin_acc_reg VALUES("899khb6rw_h8vg7xsn0","yzqur111q_uemtbss75","mark@gmail.com","mark187");
INSERT INTO admin_acc_reg VALUES("yx0nkmwiv_hsqoyrwhe","mwsi8zyv2_0ammb528h","bill@gmail.com","bill187");
INSERT INTO admin_acc_reg VALUES("zft5e5jol_e95hzf3oe","way5m28ff_tbgi2159o","elon@gmail.com","elon187");



CREATE TABLE `admin_info_reg` (
  `admin_id` varchar(255) NOT NULL,
  `admin_firstname` varchar(255) NOT NULL,
  `admin_middlename` varchar(255) NOT NULL,
  `admin_lastname` varchar(255) NOT NULL,
  `admin_type` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO admin_info_reg VALUES("mwsi8zyv2_0ammb528h","Gates","Micro","Bill","sales");
INSERT INTO admin_info_reg VALUES("way5m28ff_tbgi2159o","Elon","Lewis","Musk","data");
INSERT INTO admin_info_reg VALUES("y2oow50sm_dwjwq25xv","Steve","Blejica","Jobs","advertisment");
INSERT INTO admin_info_reg VALUES("yzqur111q_uemtbss75","Zuckerburg","Dialo","Mark","stocks");



CREATE TABLE `ads_table` (
  `id` varchar(255) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `ad_desc` text NOT NULL,
  `ad_link` varchar(255) NOT NULL,
  `ad_id_file` varchar(255) NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `activity_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO ads_table VALUES("60dbce6599485","Moon","A great start to begin with your journey. The Moon is Earths only natural satellite. At about one-quarter the diameter of Earth (comparable to the width of Australia), it is the largest natural satellite in the Solar System relative to the size of its planet, the fifth largest satellite in the Solar System overall, and is larger than any dwarf planet. Orbiting Earth at an average distance of 384,400 km (238,900 mi), or about 30 times Earths diameter, its gravitational influence slightly lengthens Earths day and is the main driver of Earths tides. The Moon is classified as a planetary-mass object and a differentiated rocky body, and lacks any significant atmosphere, hydrosphere, or magnetic field. Its surface gravity is about one-sixth of Earths (0.1654 g); Jupiters moon Io is the only satellite in the Solar System known to have a higher surface gravity and density.
The Moons orbit around Earth has a sidereal period of 27.3 days. During each synodic period of 29.5 days, the amount of visible surface illuminated by the Sun varies from none up to 100%, resulting in lunar phases that form the basis for the months of a lunar calendar. The Moon is tidally locked to Earth, which means that the length of a full rotation of the Moon on its own axis causes its same side (the near side) to always face Earth, and the somewhat longer lunar day is the same as the synodic period. That said, 59% of the total lunar surface can be seen from Earth through shifts in perspective due to libration.

 Moon gives you a great pleasant of your aura in environment.","https://en.wikipedia.org/wiki/Moon","Moon60dbce6599485","2021/06/30","y2oow50sm_dwjwq25xv","on");
INSERT INTO ads_table VALUES("60dbcff6bc0cf","Space","It is a pleasant day in space.","","Space60dbcff6bc0cf","2021/06/30","y2oow50sm_dwjwq25xv","on");
INSERT INTO ads_table VALUES("60dbd2ba619c3","Windows 11","The new Windows 11 is out now.","","Windows 1160dbd2ba619c3","2021/06/30","y2oow50sm_dwjwq25xv","on");
INSERT INTO ads_table VALUES("60dbd77900057","The Game","A new game available in the market bla bla bla.","","The Game60dbd77900057","2021/06/30","y2oow50sm_dwjwq25xv","off");
INSERT INTO ads_table VALUES("60debc47db8b3","Incoming Deals","Soon to be available!","","Incoming Deals60debc47db8b3","2021/07/02","y2oow50sm_dwjwq25xv","on");
INSERT INTO ads_table VALUES("60debddbe43aa","Latest Interface","See our new interface and updates.","","Latest Interface60debddbe43aa","2021/07/02","y2oow50sm_dwjwq25xv","off");
INSERT INTO ads_table VALUES("60e40604ba574","Dimes","akjshdkashdkjhaskd","https://en.wikipedia.org/wiki/DIMES","Dimes60e40604ba574","2021/07/06","y2oow50sm_dwjwq25xv","on");
INSERT INTO ads_table VALUES("60e407fdb180e","Know the Devs","As you enjoy browsing and buying products from Team Payaman, their are these few people that keeps everything bonded together. This feature is a dedication for the people behind the success of Team Payaman Merch Website. Do you want to know them? Click the link below!","devs.php","Know the Devs60e407fdb180e","2021/07/06","y2oow50sm_dwjwq25xv","on");
INSERT INTO ads_table VALUES("60ee8b232d324","Cong Merch","Feature new with several services of Cong Merch from Team Payaman.","","Cong Merch60ee8b232d324","2021/07/14","y2oow50sm_dwjwq25xv","on");



CREATE TABLE `brand_table` (
  `brand_id` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_desc` text NOT NULL,
  `brand_date_added` varchar(255) NOT NULL,
  `brand_image_id` varchar(255) NOT NULL,
  `admin_id_brand` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO brand_table VALUES("60dd7ed28ba9f60dd7ed28baa4","VIYLine Cosmetics","Brand for Cosmetics.","2021/07/01","Viy Cosmetics60dd7ed28ba9f60dd7ed28baa4","yzqur111q_uemtbss75");
INSERT INTO brand_table VALUES("60dd82b6ddc7060dd82b6ddc73","Cong Clothing","Brand for Cong Clothing Merch.","2021/07/01","Cong Clothing60dd82b6ddc7060dd82b6ddc73","yzqur111q_uemtbss75");



CREATE TABLE `category_table` (
  `category_id` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `category_date_added` varchar(255) NOT NULL,
  `category_image_id` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO category_table VALUES("60dd6bf4c126a60dd6bf4c126e","Head Wear","Categories for Head Wear.","2021/07/01","Head Wear60dd6bf4c126a60dd6bf4c126e","yzqur111q_uemtbss75");
INSERT INTO category_table VALUES("60dd6f661022360dd6f6610227","Shirt","Category for Shirts.","2021/07/01","Shirt60dd6f661022360dd6f6610227","yzqur111q_uemtbss75");
INSERT INTO category_table VALUES("60dd6f9ead2ac60dd6f9ead2af","Pants","Categories for Pants.","2021/07/01","Pants60dd6f9ead2ac60dd6f9ead2af","yzqur111q_uemtbss75");
INSERT INTO category_table VALUES("60dfc32a8461760dfc32a8461a","Foot Wear","Consist of shoes, sandals, socks etc.","2021/07/03","Foot Wear60dfc32a8461760dfc32a8461a","yzqur111q_uemtbss75");
INSERT INTO category_table VALUES("60e4bff0eae5260e4bff0eae56","Cosmetics","Category for Beauty products.","2021/07/06","Cosmetics60e4bff0eae5260e4bff0eae56","yzqur111q_uemtbss75");



CREATE TABLE `customer_acc_reg` (
  `customer_acc_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `cust_username` varchar(255) NOT NULL,
  `cust_password` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_contactnum` varchar(11) NOT NULL,
  `customer_address_id` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_acc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO customer_acc_reg VALUES("17uprnfy1_pwxee226w","cigwug67z_bqmji6moj","Susan_6aqmnuomb","susana187","susan.mirana@gmail.com","09298374631","cigwug67z_bqmji6moj");
INSERT INTO customer_acc_reg VALUES("htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","JohnPauloRamil_f4k1ob8jm","dt187","pauloportes.guimalan187@gmail.com","09275508232","akjou87me_a1e7tqzrd");



CREATE TABLE `customer_address` (
  `customer_address_id` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city_town` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO customer_address VALUES("akjou87me_a1e7tqzrd","9517","Kasunduan","Commonwealth","Quezon City","NCR");
INSERT INTO customer_address VALUES("cigwug67z_bqmji6moj","unapplied","Zone 5","Maya","MacArthur","Region 8");



CREATE TABLE `customer_info_reg` (
  `customer_id` varchar(255) NOT NULL,
  `cust_firstname` varchar(255) NOT NULL,
  `cust_middlename` varchar(255) NOT NULL,
  `cust_lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO customer_info_reg VALUES("akjou87me_a1e7tqzrd","John Paulo Ramil","Portes","Guimalan","Male","unapplied","unapplied");
INSERT INTO customer_info_reg VALUES("cigwug67z_bqmji6moj","Susan","Jalalon","Mirana","Female","unapplied","unapplied");



CREATE TABLE `dev_phils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dev_ph_id` varchar(255) NOT NULL,
  `dev_ph_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO dev_phils VALUES("1","dev_ph1","Life becomes a void if purpose and its beauty are unseen.");
INSERT INTO dev_phils VALUES("2","dev_ph1","Planets collide not to destroy each other, but to form a new and beautiful one. Same goes in life, you're in process of improving even if it feels like a void of pain and suffering.
");
INSERT INTO dev_phils VALUES("3","dev_ph2","Art is the externalization, the act of ordering and discipline of the passions.");
INSERT INTO dev_phils VALUES("4","dev_ph2"," Keep learning and challenge yourself");
INSERT INTO dev_phils VALUES("5","dev_ph3","Do for others what u want others do to you.");
INSERT INTO dev_phils VALUES("6","dev_ph3","The more you give , the more you will receive");
INSERT INTO dev_phils VALUES("7","dev_ph4","One word Frees us of all the weight and pain of life: That word is love.");
INSERT INTO dev_phils VALUES("8","dev_ph4","Education is not preparation for life; education is life itself");
INSERT INTO dev_phils VALUES("9","dev_ph5","Excellence is not a gift, but a skill that takes practice. We do not act rightly because we are excellent in fact we achieve excellence by acting rightly.");
INSERT INTO dev_phils VALUES("10","dev_ph5","It does not matter how slowly you go, as long as you do not stop.");
INSERT INTO dev_phils VALUES("11","dev_ph5","To live a creative life, we must lose our fear of being wrong.");
INSERT INTO dev_phils VALUES("12","dev_ph6","Do not fear failure but rather fear not trying.");
INSERT INTO dev_phils VALUES("13","dev_ph6","A bird is safe in its nest - but that is not what its wings are made for.");



CREATE TABLE `dev_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dev_sk_id` varchar(255) NOT NULL,
  `dev_sk_info` varchar(255) NOT NULL,
  `dev_sk_perc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

INSERT INTO dev_skills VALUES("1","dev_sk1","C#","55%");
INSERT INTO dev_skills VALUES("3","dev_sk1","JavaScript","75%");
INSERT INTO dev_skills VALUES("4","dev_sk1","PHP","77%");
INSERT INTO dev_skills VALUES("5","dev_sk1","Java","40%");
INSERT INTO dev_skills VALUES("6","dev_sk2","Problem Solver","25%");
INSERT INTO dev_skills VALUES("7","dev_sk2","Analytical Thinking Skills","25%");
INSERT INTO dev_skills VALUES("8","dev_sk2","Java (Programming)","50%");
INSERT INTO dev_skills VALUES("9","dev_sk3","Data Collection","55%");
INSERT INTO dev_skills VALUES("10","dev_sk3","Report Writing","78%");
INSERT INTO dev_skills VALUES("11","dev_sk3","Interviewing","80%");
INSERT INTO dev_skills VALUES("12","dev_sk4","MySQL","80%");
INSERT INTO dev_skills VALUES("13","dev_sk4","Oracle","78%");
INSERT INTO dev_skills VALUES("14","dev_sk4","NoSQL","60%");
INSERT INTO dev_skills VALUES("15","dev_sk5","PHP","80%");
INSERT INTO dev_skills VALUES("16","dev_sk5","CSS","90%");
INSERT INTO dev_skills VALUES("17","dev_sk5","Bootstrap","95%");
INSERT INTO dev_skills VALUES("18","dev_sk5","Responsive Designs ","95%");
INSERT INTO dev_skills VALUES("19","dev_sk5","Graphic Design","85%");
INSERT INTO dev_skills VALUES("20","dev_sk6","PHP","70%");
INSERT INTO dev_skills VALUES("21","dev_sk6","CSS","80%");
INSERT INTO dev_skills VALUES("22","dev_sk6","Bootstrap","85%");
INSERT INTO dev_skills VALUES("23","dev_sk6","Responsive Design","95%");
INSERT INTO dev_skills VALUES("24","dev_sk6","Graphic Design","90%");



CREATE TABLE `developers` (
  `dev_id` varchar(255) NOT NULL,
  `dev_fullname` varchar(255) NOT NULL,
  `dev_fulladdress` varchar(255) NOT NULL,
  `dev_mnum` varchar(11) NOT NULL,
  `dev_email` varchar(255) NOT NULL,
  `dev_role` varchar(255) NOT NULL,
  `dev_ext_id` varchar(255) NOT NULL,
  `dev_sk_id` varchar(255) NOT NULL,
  `dev_ph_id` varchar(255) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO developers VALUES("dev_1","Guimalan, John Paulo P.","Kasunduan St. Commonwealth, Quezon City","09275508232","pauloportes.guimalan187@gmail.com","Developer","dev_ext1","dev_sk1","dev_ph1");
INSERT INTO developers VALUES("dev_2","Bantula, Dexter T.","none","09662210832","dexter.bantula001@gmail.com ","Researcher","dev_ext2","dev_sk2","dev_ph2");
INSERT INTO developers VALUES("dev_3","Simangan, Joanna Marie J.","none","09487554556","joanna.simangan@gmail.com","Researcher","dev_ext3","dev_sk3","dev_ph3");
INSERT INTO developers VALUES("dev_4","Parangalan, Lance Alfeo V.","none","09338539940","cedieparangalan@gmail.com","Database Manager","dev_ext4","dev_sk4","dev_ph4");
INSERT INTO developers VALUES("dev_5","Castañeda, Kristine Joy M.","none","09241120123","kristinecastaneda24@gmail.com","Designer","dev_ext5","dev_sk5","dev_ph5");
INSERT INTO developers VALUES("dev_6","Tabasa, Danica Rose M.","none","09564829325","drtabasa@gmail.com","Designer","dev_ext6","dev_sk6","dev_ph6");



CREATE TABLE `developers_ext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dev_ext_id` varchar(255) NOT NULL,
  `dev_age` varchar(255) NOT NULL,
  `dateofb_dev` varchar(255) NOT NULL,
  `dev_gender` varchar(255) NOT NULL,
  `dev_cs` varchar(255) NOT NULL,
  `dev_nationality` varchar(255) NOT NULL,
  `dev_religion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO developers_ext VALUES("1","dev_ext1","Web Developer","Best Web Animation Award","BS Information Technology | QCU","Ethical Hacker, Data Analyst","Filipino","Roman Catholic");
INSERT INTO developers_ext VALUES("2","dev_ext2","20","January 07, 2001","Male","Single","Filipino","Roman Catholic");
INSERT INTO developers_ext VALUES("3","dev_ext3","30","June 22, 1991","Female","Single","Filipino","Christian");
INSERT INTO developers_ext VALUES("4","dev_ext4","Database Administrator","Best DBA Solution Award","BS Information Technology | QCU","Data Analyst, Data Management","none","none");
INSERT INTO developers_ext VALUES("5","dev_ext5","Web Designer","Award for Modeling Site Design","BS Information Technology | QCU","Adobe Certified Expert, Web Design Specialist","none","none");
INSERT INTO developers_ext VALUES("6","dev_ext6","UI Designer","Creative Design Award","BS Information Technology | QCU","Web Design Specialist, UI Design Analyst","none","none");



CREATE TABLE `notifications` (
  `notif_id` varchar(255) NOT NULL,
  `notif_desc` text NOT NULL,
  `notif_type` varchar(255) NOT NULL,
  `necessary_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO notifications VALUES("60ee8b69b1dfa","Feature new with several services of Cong Merch from Team Payaman.","ads","60ee8b232d324","17uprnfy1_pwxee226w","2021/07/14");
INSERT INTO notifications VALUES("60ee8e476de7f","A special edition from Cong Clothing.","product","60ee8e471d48d60ee8e471d490","17uprnfy1_pwxee226w","2021/07/14");
INSERT INTO notifications VALUES("60ee903d30115","You have successfully added this product to your cart","orders","60ee8e471d48d60ee8e471d490","htl5qlefx_vdvmk6f9e","2021/07/14");
INSERT INTO notifications VALUES("60ee905cbff90","You have successfully placed your order","orders","60ee8e471d48d60ee8e471d490","htl5qlefx_vdvmk6f9e","2021/07/14");
INSERT INTO notifications VALUES("60ee95cf75670","You have successfully added this product to your cart","orders","60ed2e02d466f60ed2e02d4673","17uprnfy1_pwxee226w","2021/07/14");
INSERT INTO notifications VALUES("60ee95ed41dab","You have successfully placed your order","orders","60ee8e471d48d60ee8e471d490","17uprnfy1_pwxee226w","2021/07/14");
INSERT INTO notifications VALUES("60ee98e641db8","Your order has been confirmed and is expected to be delivered at 2021-07-19","orders","60ee8e471d48d60ee8e471d490","17uprnfy1_pwxee226w","2021/07/14");
INSERT INTO notifications VALUES("60ee99c372549","Your order has been cancelled. Please check your order again and reorder. Thank you!","orders","60ee8e471d48d60ee8e471d490","htl5qlefx_vdvmk6f9e","2021/07/14");
INSERT INTO notifications VALUES("60ee99f405fe4","Your has been delivered. Thank you for shopping.","orders","60ee8e471d48d60ee8e471d490","17uprnfy1_pwxee226w","2021/07/14");
INSERT INTO notifications VALUES("60eea51bd2b39","You have successfully placed the order you had in your cart","orders","60e4c0cc9cf1c60e4c0cc9cf1f","htl5qlefx_vdvmk6f9e","2021/07/14");
INSERT INTO notifications VALUES("60eea5bc82439","You have successfully placed the order you had in your cart","orders","60e50dbcb6a2060e50dbcb6a25","htl5qlefx_vdvmk6f9e","2021/07/14");
INSERT INTO notifications VALUES("60eea5d69f620","You have removed an order in your cart","orders","60e4c0cc9cf1c60e4c0cc9cf1f","htl5qlefx_vdvmk6f9e","2021/07/14");
INSERT INTO notifications VALUES("60eea5eaa1445","You have successfully cancelled your pending order","orders","60e50dbcb6a2060e50dbcb6a25","htl5qlefx_vdvmk6f9e","2021/07/14");
INSERT INTO notifications VALUES("60ef72fcb8ace","You have successfully added this product to your cart","orders","60ed2e02d466f60ed2e02d4673","htl5qlefx_vdvmk6f9e","2021/07/15");
INSERT INTO notifications VALUES("60ef73047ea9f","You have successfully placed your order","orders","60ed2e02d466f60ed2e02d4673","htl5qlefx_vdvmk6f9e","2021/07/15");
INSERT INTO notifications VALUES("60efd004c354c","You have successfully added this product to your cart","orders","60ee8e471d48d60ee8e471d490","htl5qlefx_vdvmk6f9e","2021/07/15");
INSERT INTO notifications VALUES("60efd00b5f13b","You have successfully placed your order","orders","60ee8e471d48d60ee8e471d490","htl5qlefx_vdvmk6f9e","2021/07/15");
INSERT INTO notifications VALUES("60f0900317881","You have successfully placed the order you had in your cart","orders","60ee8e471d48d60ee8e471d490","htl5qlefx_vdvmk6f9e","2021/07/15");



CREATE TABLE `order_table` (
  `order_id` varchar(255) NOT NULL,
  `customer_acc_id` varchar(255) NOT NULL,
  `customer_info_id` varchar(255) NOT NULL,
  `customer_add_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `date_ordered` varchar(255) NOT NULL,
  `date_delivery` varchar(255) NOT NULL,
  `date_delivered` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO order_table VALUES("60e60ec52432f60e60ec52433460e60ec524335","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","3","default","default","on delivery","2021-07-07","2021-07-13","undelivered","gcash");
INSERT INTO order_table VALUES("60e60efdd372560e60efdd372760e60efdd3728","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c17b8e95c60e4c17b8e960","4","default","default","cancelled","2021-07-07","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60e60f6ca5e3a60e60f6ca5e4c60e60f6ca5e55","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e50dbcb6a2060e50dbcb6a25","5","default","default","cancelled","2021-07-07","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60e60f87253a260e60f87253a560e60f87253a7","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","1","default","default","delivered","2021-07-07","2021-07-13","2021-07-08","gcash");
INSERT INTO order_table VALUES("60e62f336b47c60e62f336b48360e62f336b487","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c0cc9cf1c60e4c0cc9cf1f","3","default","default","cancelled","2021-07-08","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60e64a55035b660e64a55035b960e64a55035ba","17uprnfy1_pwxee226w","cigwug67z_bqmji6moj","cigwug67z_bqmji6moj","60e4c17b8e95c60e4c17b8e960","2","default","default","delivered","2021-07-08","2021-07-13","2021-07-11","cash_on_delivery");
INSERT INTO order_table VALUES("60e6ce033ab0b60e6ce033ab1260e6ce033ab15","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","3","default","default","cancelled","2021-07-08","unapplied","undelivered","gcash");
INSERT INTO order_table VALUES("60e6ce3b726bd60e6ce3b726bf60e6ce3b726c1","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","1","default","default","cancelled","2021-07-08","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60e6d04c4107d60e6d04c4108160e6d04c41083","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c0cc9cf1c60e4c0cc9cf1f","4","default","default","cart","2021-07-08","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60e7fdadd5d5d60e7fdadd5d6660e7fdadd5d6a","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","2","default","default","cancelled","2021-07-09","unapplied","undelivered","gcash");
INSERT INTO order_table VALUES("60e7fe8cd4bef60e7fe8cd4bf360e7fe8cd4bf5","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","3","default","default","on delivery","2021-07-09","2021-07-18","undelivered","paymaya");
INSERT INTO order_table VALUES("60e7fe9de875660e7fe9de875960e7fe9de875c","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","2","default","default","cancelled","2021-07-09","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60e7fec1d937760e7fec1d937d60e7fec1d9380","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c17b8e95c60e4c17b8e960","3","default","default","cancelled","2021-07-09","unapplied","undelivered","gcash");
INSERT INTO order_table VALUES("60e805971cc4c60e805971cc6b60e805971cc6c","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c0cc9cf1c60e4c0cc9cf1f","4","default","default","pending","2021-07-09","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60eaa11fcc97a60eaa11fcc98360eaa11fcc987","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","2","default","default","cart","2021-07-11","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60eaa1348db4660eaa1348db4860eaa1348db49","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","1","default","default","cancelled","2021-07-11","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60ed1c56eded560ed1c56eded960ed1c56ededc","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e50dbcb6a2060e50dbcb6a25","1","default","default","cancelled","2021-07-13","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60ed3e43f0d3060ed3e43f0d3560ed3e43f0d37","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","3","Medium","Black","cancelled","2021-07-13","unapplied","undelivered","gcash");
INSERT INTO order_table VALUES("60ed3e646b99e60ed3e646b9a560ed3e646b9a7","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","2","Large","White","cancelled","2021-07-13","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60ed3ec96084560ed3ec96084860ed3ec960849","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60ed2e02d466f60ed2e02d4673","1","default","Pink","cancelled","2021-07-13","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60ee903d2061060ee903d2061860ee903d2061c","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60ee8e471d48d60ee8e471d490","2","default","Black","cancelled","2021-07-14","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60ee905caefcd60ee905caefd360ee905caefd5","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60ee8e471d48d60ee8e471d490","3","default","Orange","cancelled","2021-07-14","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60ee95cf676f260ee95cf676f560ee95cf676f7","17uprnfy1_pwxee226w","cigwug67z_bqmji6moj","cigwug67z_bqmji6moj","60ed2e02d466f60ed2e02d4673","2","default","Pink","cart","2021-07-14","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60ee95ed3123e60ee95ed3124160ee95ed31242","17uprnfy1_pwxee226w","cigwug67z_bqmji6moj","cigwug67z_bqmji6moj","60ee8e471d48d60ee8e471d490","1","default","White","delivered","2021-07-14","2021-07-19","2021-07-14","gcash");
INSERT INTO order_table VALUES("60ef72fcb0fdd60ef72fcb0fe760ef72fcb0fe9","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60ed2e02d466f60ed2e02d4673","1","default","Black","cart","2021-07-15","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60ef73047168460ef73047168860ef73047168a","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60ed2e02d466f60ed2e02d4673","1","default","Black","pending","2021-07-15","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60efd004a825260efd004a825b60efd004a825e","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60ee8e471d48d60ee8e471d490","2","default","Black","pending","2021-07-15","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60efd00b4b4a760efd00b4b4aa60efd00b4b4ab","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60ee8e471d48d60ee8e471d490","1","default","White","pending","2021-07-15","unapplied","undelivered","cash_on_delivery");



CREATE TABLE `product_image_table` (
  `product_image_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `image_number` varchar(255) NOT NULL,
  PRIMARY KEY (`product_image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO product_image_table VALUES("60de59026824b60de590268252","60de59026797360de590267977","1");
INSERT INTO product_image_table VALUES("60de5902774a660de5902774c2","60de59026797360de590267977","2");
INSERT INTO product_image_table VALUES("60de590284cab60de590284cb4","60de59026797360de590267977","3");
INSERT INTO product_image_table VALUES("60de5902a7b7160de5902a7b76","60de59026797360de590267977","4");
INSERT INTO product_image_table VALUES("60e4c0cc9d7b060e4c0cc9d7b6","60e4c0cc9cf1c60e4c0cc9cf1f","1");
INSERT INTO product_image_table VALUES("60e4c17b8f5b160e4c17b8f5b9","60e4c17b8e95c60e4c17b8e960","1");
INSERT INTO product_image_table VALUES("60e4f5854a03a60e4f5854a040","60e4f5854967c60e4f58549680","1");
INSERT INTO product_image_table VALUES("60e4f5855e0bd60e4f5855e0c7","60e4f5854967c60e4f58549680","2");
INSERT INTO product_image_table VALUES("60e50dbcb751560e50dbcb7527","60e50dbcb6a2060e50dbcb6a25","1");
INSERT INTO product_image_table VALUES("60ed2e02d52e860ed2e02d52f0","60ed2e02d466f60ed2e02d4673","2");
INSERT INTO product_image_table VALUES("60ed2e02ea13160ed2e02ea141","60ed2e02d466f60ed2e02d4673","4");
INSERT INTO product_image_table VALUES("60ee8e471dde460ee8e471ddeb","60ee8e471d48d60ee8e471d490","1");



CREATE TABLE `product_table` (
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_types` varchar(255) NOT NULL,
  `product_colors` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_date_posted` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `admin_id_product` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO product_table VALUES("60de59026797360de590267977","TP 2021","Cong Clothing","Shirt","Small,Medium,Large","White,Black","Shirt from Cong Clothing 2021.","2021/07/02","150","17","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60e4c0cc9cf1c60e4c0cc9cf1f","Lip Cream","VIYLine Cosmetics","Cosmetics","default","default","Couples edition of lip cream from Viy Line.","2021/07/06","30","100","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60e4c17b8e95c60e4c17b8e960","Lip Dip","VIYLine Cosmetics","Cosmetics","default","default","New classy lip dip which consists of four labels chuchu","2021/07/06","80","148","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60e4f5854967c60e4f58549680","TP Chains","Cong Clothing","Shirt","Small,Medium,Large","White,Black","Consist of black and white shirts.","2021/07/07","150","196","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60e50dbcb6a2060e50dbcb6a25","Cheesecake","VIYLine Cosmetics","Cosmetics","default","default","A 3 in 1 make up blush on ready for fashion.","2021/07/07","120","100","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60ed2e02d466f60ed2e02d4673","HD Matte Tint","VIYLine Cosmetics","Cosmetics","default","Black,Pink","Consist of two variety of tints.","2021/07/13","120","200","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60ee8e471d48d60ee8e471d490","Cong Slipper","Cong Clothing","Foot Wear","default","White,Black,Orange","A special edition from Cong Clothing.","2021/07/14","70","199","yzqur111q_uemtbss75");



CREATE TABLE `reviews` (
  `review_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `customer_info_id` varchar(255) NOT NULL,
  `review_content` text NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  `stars` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO reviews VALUES("60e6ba3356e4660e6ba3356e4860e6ba3356e49","60e4c17b8e95c60e4c17b8e960","htl5qlefx_vdvmk6f9e","This is cool.","2021-07-08","4");
INSERT INTO reviews VALUES("60e6bb2de49fd60e6bb2de4a0360e6bb2de4a05","60e4c17b8e95c60e4c17b8e960","htl5qlefx_vdvmk6f9e","Hi again, this is 5 stars for me.","2021-07-08","5");
INSERT INTO reviews VALUES("60e6c1603ca3460e6c1603ca3860e6c1603ca39","60e4c17b8e95c60e4c17b8e960","htl5qlefx_vdvmk6f9e","I am allergic to this.","2021-07-08","2");
INSERT INTO reviews VALUES("60e6cb96972a660e6cb96972ad60e6cb96972af","60de59026797360de590267977","htl5qlefx_vdvmk6f9e","Nice!!!","2021-07-08","3");
INSERT INTO reviews VALUES("60e6cbee7375d60e6cbee7376660e6cbee73769","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","Very Nice, loved it!","2021-07-08","5");
INSERT INTO reviews VALUES("60e6cd1c4e7fb60e6cd1c4e80860e6cd1c4e809","60de59026797360de590267977","htl5qlefx_vdvmk6f9e","Mali yung size","2021-07-08","1");
INSERT INTO reviews VALUES("60e6cfd66865e60e6cfd66866360e6cfd668664","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-08","3");
INSERT INTO reviews VALUES("60e6d0176da7760e6d0176da7b60e6d0176da7c","60e4c17b8e95c60e4c17b8e960","htl5qlefx_vdvmk6f9e","","2021-07-08","2");
INSERT INTO reviews VALUES("60e6d10842b7760e6d10842b7c60e6d10842b7e","60e4c0cc9cf1c60e4c0cc9cf1f","17uprnfy1_pwxee226w","I love it, sobraaaa!","2021-07-08","3");
INSERT INTO reviews VALUES("60e6d12d2c3b760e6d12d2c3be60e6d12d2c3c0","60de59026797360de590267977","17uprnfy1_pwxee226w","Saya sana kaso wala ako pera, char!","2021-07-08","2");
INSERT INTO reviews VALUES("60e7f77f7f09760e7f77f7f09960e7f77f7f09a","60e4c0cc9cf1c60e4c0cc9cf1f","htl5qlefx_vdvmk6f9e","I want this!","2021-07-09","4");
INSERT INTO reviews VALUES("60e93f0d9c7e760e93f0d9c7f060e93f0d9c7f3","60e50dbcb6a2060e50dbcb6a25","htl5qlefx_vdvmk6f9e","5 stars agaaaad!","2021-07-10","5");
INSERT INTO reviews VALUES("60e957631cc7b60e957631cc8460e957631cc86","60de59026797360de590267977","htl5qlefx_vdvmk6f9e","","2021-07-10","1");
INSERT INTO reviews VALUES("60e9576a6da3260e9576a6da3860e9576a6da3a","60de59026797360de590267977","htl5qlefx_vdvmk6f9e","","2021-07-10","1");
INSERT INTO reviews VALUES("60e9577bab37960e9577bab37c60e9577bab37d","60de59026797360de590267977","htl5qlefx_vdvmk6f9e","","2021-07-10","1");
INSERT INTO reviews VALUES("60e9580652a3a60e9580652a3d60e9580652a3e","60e4c17b8e95c60e4c17b8e960","htl5qlefx_vdvmk6f9e","","2021-07-10","1");
INSERT INTO reviews VALUES("60e9580c3f21660e9580c3f21c60e9580c3f21f","60e4c17b8e95c60e4c17b8e960","htl5qlefx_vdvmk6f9e","","2021-07-10","1");
INSERT INTO reviews VALUES("60e9585acec9760e9585aceca060e9585aceca3","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","1");
INSERT INTO reviews VALUES("60e9585e6a75f60e9585e6a76560e9585e6a767","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","2");
INSERT INTO reviews VALUES("60e958692238d60e958692239360e9586922395","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","5");
INSERT INTO reviews VALUES("60e958724429b60e95872442a160e95872442a3","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","4");
INSERT INTO reviews VALUES("60e9587fe610560e9587fe610860e9587fe6109","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","4");
INSERT INTO reviews VALUES("60e958922206f60e958922207560e9589222077","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","3");
INSERT INTO reviews VALUES("60e9589b9fc0860e9589b9fc1060e9589b9fc12","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","3");
INSERT INTO reviews VALUES("60e958a9761d860e958a9761de60e958a9761e0","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","5");
INSERT INTO reviews VALUES("60e958b16c67b60e958b16c67e60e958b16c67f","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","4");
INSERT INTO reviews VALUES("60e958bbcc9a560e958bbcc9ab60e958bbcc9ad","60e4f5854967c60e4f58549680","htl5qlefx_vdvmk6f9e","","2021-07-10","4");
INSERT INTO reviews VALUES("60ea4c493f11e60ea4c493f12660ea4c493f129","60e50dbcb6a2060e50dbcb6a25","htl5qlefx_vdvmk6f9e","","2021-07-11","3");
INSERT INTO reviews VALUES("60ea61bc0f14460ea61bc0f14760ea61bc0f148","60e4c0cc9cf1c60e4c0cc9cf1f","htl5qlefx_vdvmk6f9e","Gandaaaa","2021-07-11","4");
INSERT INTO reviews VALUES("60ef730492c1660ef730492c2060ef730492c22","60ed2e02d466f60ed2e02d4673","htl5qlefx_vdvmk6f9e","asdadsdasd","2021-07-15","5");
INSERT INTO reviews VALUES("60efcfe0cbf3160efcfe0cbf3760efcfe0cbf38","60ee8e471d48d60ee8e471d490","htl5qlefx_vdvmk6f9e","fits perfectly","2021-07-15","5");



CREATE TABLE `testimonies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO testimonies VALUES("10","Paolo Guimalan","In writing, the words point and purpose are almost synonymous. Your point is your purpose, and how you decide to make your point clear to your reader is also your purpose. Writers have a point and a purpose for every paragraph that they create.Writers write descriptive paragraphs because their purpose is to describe something. Their point is that something is beautiful or disgusting or strangely intriguing. Writers write persuasive and argument paragraphs because their purpose is to persuade or convince someone. Their point is that their reader should see things a particular way and possibly take action on that new way of seeing things. Writers write persuasive and argument paragraphs because their purpose is to persuade or convince someone. Their point is that their reader should see things a particular way and possibly take action on that new way of seeing things.Guimalan","2021/07/23");
INSERT INTO testimonies VALUES("11","Juan De La Cruz","In writing, the words point and purpose are almost synonymous. Your point is your purpose, and how you decide to make your point clear to your reader is also your purpose. Writers have a point and a purpose for every paragraph that they create.Writers write descriptive paragraphs because their purpose is to describe something. Their point is that something is beautiful or disgusting or strangely intriguing. Writers write persuasive and argument paragraphs because their purpose is to persuade or convince someone. Their point is that their reader should see things a particular way and possibly take action on that new way of seeing things. Writers write persuasive and argument paragraphs because their purpose is to persuade or convince someone. Their point is that their reader should see things a particular way and possibly take action on that new way of seeing things.","2021/07/23");



CREATE TABLE `testimony_acc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO testimony_acc VALUES("2","Juan De La Cruz","juan.delacruz@gmail.com");
INSERT INTO testimony_acc VALUES("3","Paolo Guimalan","pauloportes.guimalan187@gmail.com");

