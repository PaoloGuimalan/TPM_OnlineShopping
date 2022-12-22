

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
INSERT INTO ads_table VALUES("60dbd77900057","The Game","A new game available in the market bla bla bla.","","The Game60dbd77900057","2021/06/30","y2oow50sm_dwjwq25xv","on");
INSERT INTO ads_table VALUES("60debc47db8b3","Incoming Deals","Soon to be available!","","Incoming Deals60debc47db8b3","2021/07/02","y2oow50sm_dwjwq25xv","on");
INSERT INTO ads_table VALUES("60debddbe43aa","Latest Interface","See our new interface and updates.","","Latest Interface60debddbe43aa","2021/07/02","y2oow50sm_dwjwq25xv","off");
INSERT INTO ads_table VALUES("60e40604ba574","Dimes","akjshdkashdkjhaskd","https://en.wikipedia.org/wiki/DIMES","Dimes60e40604ba574","2021/07/06","y2oow50sm_dwjwq25xv","off");
INSERT INTO ads_table VALUES("60e407fdb180e","Know the Devs","As you enjoy browsing and buying products from Team Payaman, their are these few people that keeps everything bonded together. This feature is a dedication for the people behind the success of Team Payaman Merch Website. Do you want to know them? Click the link below!","devs.php","Know the Devs60e407fdb180e","2021/07/06","y2oow50sm_dwjwq25xv","on");



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

INSERT INTO customer_address VALUES("akjou87me_a1e7tqzrd","9517","Kasunduan","Commonwealth","QC","NCR");
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



CREATE TABLE `order_table` (
  `order_id` varchar(255) NOT NULL,
  `customer_acc_id` varchar(255) NOT NULL,
  `customer_info_id` varchar(255) NOT NULL,
  `customer_add_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `date_ordered` varchar(255) NOT NULL,
  `date_delivery` varchar(255) NOT NULL,
  `date_delivered` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO order_table VALUES("60e60ec52432f60e60ec52433460e60ec524335","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","3","on delivery","2021-07-07","2021-07-13","undelivered","gcash");
INSERT INTO order_table VALUES("60e60efdd372560e60efdd372760e60efdd3728","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c17b8e95c60e4c17b8e960","4","cancelled","2021-07-07","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60e60f6ca5e3a60e60f6ca5e4c60e60f6ca5e55","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e50dbcb6a2060e50dbcb6a25","5","pending","2021-07-07","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60e60f87253a260e60f87253a560e60f87253a7","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","1","delivered","2021-07-07","2021-07-13","2021-07-08","gcash");
INSERT INTO order_table VALUES("60e62f336b47c60e62f336b48360e62f336b487","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c0cc9cf1c60e4c0cc9cf1f","3","cancelled","2021-07-08","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60e64a55035b660e64a55035b960e64a55035ba","17uprnfy1_pwxee226w","cigwug67z_bqmji6moj","cigwug67z_bqmji6moj","60e4c17b8e95c60e4c17b8e960","2","delivered","2021-07-08","2021-07-13","2021-07-11","cash_on_delivery");
INSERT INTO order_table VALUES("60e6ce033ab0b60e6ce033ab1260e6ce033ab15","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","3","cancelled","2021-07-08","unapplied","undelivered","gcash");
INSERT INTO order_table VALUES("60e6ce3b726bd60e6ce3b726bf60e6ce3b726c1","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","1","pending","2021-07-08","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60e6d04c4107d60e6d04c4108160e6d04c41083","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c0cc9cf1c60e4c0cc9cf1f","4","pending","2021-07-08","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60e7fdadd5d5d60e7fdadd5d6660e7fdadd5d6a","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","2","pending","2021-07-09","unapplied","undelivered","gcash");
INSERT INTO order_table VALUES("60e7fe8cd4bef60e7fe8cd4bf360e7fe8cd4bf5","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","3","cart","2021-07-09","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60e7fe9de875660e7fe9de875960e7fe9de875c","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4f5854967c60e4f58549680","2","pending","2021-07-09","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60e7fec1d937760e7fec1d937d60e7fec1d9380","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c17b8e95c60e4c17b8e960","3","cart","2021-07-09","unapplied","undelivered","gcash");
INSERT INTO order_table VALUES("60e805971cc4c60e805971cc6b60e805971cc6c","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60e4c0cc9cf1c60e4c0cc9cf1f","4","cart","2021-07-09","unapplied","undelivered","paymaya");
INSERT INTO order_table VALUES("60eaa11fcc97a60eaa11fcc98360eaa11fcc987","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","2","pending","2021-07-11","unapplied","undelivered","cash_on_delivery");
INSERT INTO order_table VALUES("60eaa1348db4660eaa1348db4860eaa1348db49","htl5qlefx_vdvmk6f9e","akjou87me_a1e7tqzrd","akjou87me_a1e7tqzrd","60de59026797360de590267977","1","cart","2021-07-11","unapplied","undelivered","paymaya");



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



CREATE TABLE `product_table` (
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_date_posted` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `admin_id_product` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO product_table VALUES("60de59026797360de590267977","TP 2021","Cong Clothing","Shirt","Shirt from Cong Clothing 2021.","2021/07/02","150","17","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60e4c0cc9cf1c60e4c0cc9cf1f","Lip Cream","VIYLine Cosmetics","Cosmetics","Couples edition of lip cream from Viy Line.","2021/07/06","30","100","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60e4c17b8e95c60e4c17b8e960","Lip Dip","VIYLine Cosmetics","Cosmetics","New classy lip dip which consists of four labels chuchu","2021/07/06","80","148","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60e4f5854967c60e4f58549680","TP Chains","Cong Clothing","Shirt","Consist of black and white shirts.","2021/07/07","150","199","yzqur111q_uemtbss75");
INSERT INTO product_table VALUES("60e50dbcb6a2060e50dbcb6a25","Cheesecake","VIYLine Cosmetics","Cosmetics","A 3 in 1 make up blush on ready for fashion.","2021/07/07","120","100","yzqur111q_uemtbss75");



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

