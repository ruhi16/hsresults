<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([  
            ['name'=>'Md. Miftahul Islam Beg','designation'=>'Headmaster/TIC','membership_no'=>'22','membership_date'=>'07/04/2012','account_no'=>'0977010216319','society_id'=> 1],
            ['name'=>'Mashihar Rahaman','designation'=>'Asst. Teacer','membership_no'=>'32','membership_date'=>'01/04/2005','account_no'=>'0977010213448','society_id'=> 1],
            ['name'=>'Abu Taher','designation'=>'Asst. Teacer','membership_no'=>'56','membership_date'=>'20/07/2011','account_no'=>'0977010216166','society_id'=> 1],
            ['name'=>'Narayan Barman','designation'=>'Asst. Teacer','membership_no'=>'33','membership_date'=>'01/04/2006','account_no'=>'0977010216449','society_id'=> 1],
            ['name'=>'Rameez Raza','designation'=>'Asst. Teacer','membership_no'=>'34','membership_date'=>'01/04/2006','account_no'=>'0977010217385','society_id'=> 1],
            ['name'=>'Md. Faridul Haque','designation'=>'Asst. Teacer','membership_no'=>'35','membership_date'=>'14/10/2006','account_no'=>'0977010216050','society_id'=> 1],
            ['name'=>'Ganesh Chandra Mondal','designation'=>'Asst. Teacer','membership_no'=>'36','membership_date'=>'14/09/2007','account_no'=>'0977010216159','society_id'=> 1],
            ['name'=>'Md. Abdul Momen','designation'=>'Asst. Teacer','membership_no'=>'45','membership_date'=>'18/04/2009','account_no'=>'0977010107478','society_id'=> 1],
            ['name'=>'Navid Anjum','designation'=>'Asst. Teacer','membership_no'=>'42','membership_date'=>'22/09/2008','account_no'=>'0977010152242','society_id'=> 1],
            ['name'=>'Manik Biswas','designation'=>'Asst. Teacer','membership_no'=>'39','membership_date'=>'20/02/2008','account_no'=>'0977010213790','society_id'=> 1],
            ['name'=>'Md Abu Jar','designation'=>'Asst. Teacer','membership_no'=>'40','membership_date'=>'21/04/2008','account_no'=>'0977010216357','society_id'=> 1],
            ['name'=>'Soumen Mondal','designation'=>'Asst. Teacer','membership_no'=>'43','membership_date'=>'15/01/2009','account_no'=>'0977010213707','society_id'=> 1],
            ['name'=>'Md Abdur Rouf','designation'=>'Asst. Teacer','membership_no'=>'44','membership_date'=>'21/01/2009','account_no'=>'0977010100743','society_id'=> 1],
            ['name'=>'Rafina Yeasmin','designation'=>'Asst. Teacer','membership_no'=>'47','membership_date'=>'18/05/2009','account_no'=>'0977010213370','society_id'=> 1],
            ['name'=>'Hanjal Sk.','designation'=>'Asst. Teacer','membership_no'=>'49','membership_date'=>'18/06/2010','account_no'=>'0977010216135','society_id'=> 1],
            ['name'=>'Mst. Aleya Khatun','designation'=>'Asst. Teacer','membership_no'=>'48','membership_date'=>'18/06/2010','account_no'=>'0977010216333','society_id'=> 1],
            ['name'=>'Md. Mukhlesur Rahaman','designation'=>'Asst. Teacer','membership_no'=>'52','membership_date'=>'11/10/2010','account_no'=>'0977010216678','society_id'=> 1],
            ['name'=>'Md Sarifuzzaman','designation'=>'Asst. Teacer','membership_no'=>'50','membership_date'=>'11/10/2010','account_no'=>'0977010107209','society_id'=> 1],
            ['name'=>'Rajes Upadhyay','designation'=>'Asst. Teacer','membership_no'=>'51','membership_date'=>'11/10/2010','account_no'=>'0977010216425','society_id'=> 1],
            ['name'=>'Koushik Goswami','designation'=>'Asst. Teacer','membership_no'=>'53','membership_date'=>'11/10/2010','account_no'=>'0977010213400','society_id'=> 1],
            ['name'=>'Hari Narayan Das','designation'=>'Asst. Teacer','membership_no'=>'54','membership_date'=>'11/10/2010','account_no'=>'0977010213714','society_id'=> 1],
            ['name'=>'Debasis Roy','designation'=>'Asst. Teacer','membership_no'=>'55','membership_date'=>'11/10/2010','account_no'=>'0977010213820','society_id'=> 1],
            ['name'=>'Md Abul Fazal','designation'=>'Asst. Teacer','membership_no'=>'62','membership_date'=>'02/07/2012','account_no'=>'0977010216265','society_id'=> 1],
            ['name'=>'Barun Kumar Singha','designation'=>'Asst. Teacer','membership_no'=>'59','membership_date'=>'03/03/2012','account_no'=>'0977010215053','society_id'=> 1],
            ['name'=>'Dola Rani Dey','designation'=>'Asst. Teacer','membership_no'=>'58','membership_date'=>'06/02/2012','account_no'=>'0977010216739','society_id'=> 1],
            ['name'=>'Md Sabir Ahammed','designation'=>'Asst. Teacer','membership_no'=>'61','membership_date'=>'05/06/2012','account_no'=>'0977010215572','society_id'=> 1],
            ['name'=>'Sutap Giri','designation'=>'Asst. Teacer','membership_no'=>'57','membership_date'=>'06/02/2012','account_no'=>'0977010215046','society_id'=> 1],
            ['name'=>'JIarul Sardar','designation'=>'Asst. Teacer','membership_no'=>'67','membership_date'=>'07/07/2014','account_no'=>'0977010249577','society_id'=> 1],
            ['name'=>'Choudhuri Zinnat Hossain','designation'=>'Asst. Teacer','membership_no'=>'66','membership_date'=>'07/07/2014','account_no'=>'0977010249614','society_id'=> 1],
            ['name'=>'Ziaul Golder','designation'=>'Asst. Teacer','membership_no'=>'65','membership_date'=>'16/04/2014','account_no'=>'0977010249607','society_id'=> 1],
            ['name'=>'Bhakti Pada Mondal','designation'=>'Group D','membership_no'=>'28','membership_date'=>'05/04/2001','account_no'=>'0977010216340','society_id'=> 1],
            ['name'=>'Md Reajudding','designation'=>'Group D','membership_no'=>'29','membership_date'=>'05/04/2001','account_no'=>'0977010101233','society_id'=> 1],
            ['name'=>'Hasina Banu','designation'=>'Group D','membership_no'=>'21','membership_date'=>'09/01/1995','account_no'=>'0977010213417','society_id'=> 1],
            ['name'=>'Sabir Ali','designation'=>'Group D','membership_no'=>'64','membership_date'=>'08/04/2014','account_no'=>'0977010247252','society_id'=> 1],
            ['name'=>'Sk Abdul Aziz','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>'21/05/2015','account_no'=>'0977010249553','society_id'=> 1],
            ['name'=>'Shubankar Bhattacharia','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'02/07/2012','account_no'=>'0977010327183','society_id'=> 1],
            ['name'=>'Md Ansarul Haque','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'03/03/2012','account_no'=>'0977010327176','society_id'=> 1],
            ['name'=>'Md Hajekul Sk','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'06/02/2012','account_no'=>'0977010110597','society_id'=> 1],
            ['name'=>'Md Golam Mozaddid','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'05/06/2012','account_no'=>'0977010328081','society_id'=> 1],
            ['name'=>'Md Gajikul Islam','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'06/02/2012','account_no'=>'0977010107090','society_id'=> 1],
            ['name'=>'Md Masum Reja','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'07/07/2014','account_no'=>'0977010110583','society_id'=> 1],
            ['name'=>'Md Ismail Hoque','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'07/07/2014','account_no'=>'0977010333757','society_id'=> 1],
            ['name'=>'Md Ziaul Hoque','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'16/04/2014','account_no'=>'0977010332965','society_id'=> 1],
            ['name'=>'MD SAMSAD HOSSAIN','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'05/04/2001','account_no'=>'0977010110522','society_id'=> 1],
            ['name'=>'Md Rafiqul Hasan','designation'=>'Asst. Teacher','membership_no'=>'NULL','membership_date'=>'05/04/2001','account_no'=>'0977010213257','society_id'=> 1],
            ['name'=>'Arjina Khatun','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'09/01/1995','account_no'=>'0977010110549','society_id'=> 1],
            ['name'=>'Md Rakibul Aziz','designation'=>'Asst. Teacer','membership_no'=>'NULL','membership_date'=>'08/04/2014','account_no'=>'0977010330954','society_id'=> 1],



            
        ]);
    }
}
