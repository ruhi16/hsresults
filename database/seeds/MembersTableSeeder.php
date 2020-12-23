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
            
            ['id'=> 10 ,'user_id'=> 0 ,'name'=>'Md. Miftahul Islam Beg','designation'=>'Headmaster/TIC','membership_no'=>'22','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216319','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'Inactive','remarks'=>''],
            ['id'=> 11 ,'user_id'=> 0 ,'name'=>'Mashihar Rahaman','designation'=>'Asst. Teacer','membership_no'=>'32','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213448','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 12 ,'user_id'=> 0 ,'name'=>'Abu Taher','designation'=>'Asst. Teacer','membership_no'=>'56','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216166','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'Inactive','remarks'=>''],
            ['id'=> 13 ,'user_id'=> 0 ,'name'=>'Narayan Barman','designation'=>'Asst. Teacer','membership_no'=>'33','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216449','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 14 ,'user_id'=> 0 ,'name'=>'Rameez Raza','designation'=>'Asst. Teacer','membership_no'=>'34','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010217385','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 15 ,'user_id'=> 0 ,'name'=>'Md. Faridul Haque','designation'=>'Asst. Teacer','membership_no'=>'35','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216050','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 16 ,'user_id'=> 11 ,'name'=>'Ganesh Chandra Mondal','designation'=>'Asst. Teacer','membership_no'=>'36','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216159','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 17 ,'user_id'=> 0 ,'name'=>'Md. Abdul Momen','designation'=>'Asst. Teacer','membership_no'=>'45','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010107478','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 18 ,'user_id'=> 0 ,'name'=>'Navid Anjum','designation'=>'Asst. Teacer','membership_no'=>'42','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010152242','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 19 ,'user_id'=> 0 ,'name'=>'Manik Biswas','designation'=>'Asst. Teacer','membership_no'=>'39','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213790','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 20 ,'user_id'=> 0 ,'name'=>'Md Abu Jar','designation'=>'Asst. Teacer','membership_no'=>'40','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216357','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 21 ,'user_id'=> 0 ,'name'=>'Soumen Mondal','designation'=>'Asst. Teacer','membership_no'=>'43','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213707','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 22 ,'user_id'=> 0 ,'name'=>'Md Abdur Rouf','designation'=>'Asst. Teacer','membership_no'=>'44','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010100743','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 23 ,'user_id'=> 0 ,'name'=>'Rafina Yeasmin','designation'=>'Asst. Teacer','membership_no'=>'47','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213370','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 24 ,'user_id'=> 0 ,'name'=>'Hanjal Sk.','designation'=>'Asst. Teacer','membership_no'=>'49','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216135','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 25 ,'user_id'=> 0 ,'name'=>'Mst. Aleya Khatun','designation'=>'Asst. Teacer','membership_no'=>'48','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216333','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 26 ,'user_id'=> 0 ,'name'=>'Md. Mukhlesur Rahaman','designation'=>'Asst. Teacer','membership_no'=>'52','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216678','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 27 ,'user_id'=> 0 ,'name'=>'Md Sarifuzzaman','designation'=>'Asst. Teacer','membership_no'=>'50','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010107209','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 28 ,'user_id'=> 0 ,'name'=>'Rajes Upadhyay','designation'=>'Asst. Teacer','membership_no'=>'51','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216425','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 29 ,'user_id'=> 0 ,'name'=>'Koushik Goswami','designation'=>'Asst. Teacer','membership_no'=>'53','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213400','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 30 ,'user_id'=> 0 ,'name'=>'Hari Narayan Das','designation'=>'Asst. Teacer','membership_no'=>'54','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213714','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 31 ,'user_id'=> 0 ,'name'=>'Debasis Roy','designation'=>'Asst. Teacer','membership_no'=>'55','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213820','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 32 ,'user_id'=> 0 ,'name'=>'Md Abul Fazal','designation'=>'Asst. Teacer','membership_no'=>'62','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216265','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 33 ,'user_id'=> 0 ,'name'=>'Barun Kumar Singha','designation'=>'Asst. Teacer','membership_no'=>'59','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010215053','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 34 ,'user_id'=> 0 ,'name'=>'Dola Rani Dey','designation'=>'Asst. Teacer','membership_no'=>'58','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216739','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 35 ,'user_id'=> 0 ,'name'=>'Md Sabir Ahammed','designation'=>'Asst. Teacer','membership_no'=>'61','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010215572','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 36 ,'user_id'=> 0 ,'name'=>'Sutap Giri','designation'=>'Asst. Teacer','membership_no'=>'57','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010215046','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 37 ,'user_id'=> 0 ,'name'=>'JIarul Sardar','designation'=>'Asst. Teacer','membership_no'=>'67','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010249577','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 38 ,'user_id'=> 0 ,'name'=>'Choudhuri Zinnat Hossain','designation'=>'Asst. Teacer','membership_no'=>'66','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010249614','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 39 ,'user_id'=> 0 ,'name'=>'Ziaul Golder','designation'=>'Asst. Teacer','membership_no'=>'65','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010249607','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 40 ,'user_id'=> 0 ,'name'=>'Bhakti Pada Mondal','designation'=>'Group D','membership_no'=>'28','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010216340','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 41 ,'user_id'=> 0 ,'name'=>'Md Reajudding','designation'=>'Group D','membership_no'=>'29','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010101233','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'Inactive','remarks'=>''],
            ['id'=> 42 ,'user_id'=> 0 ,'name'=>'Hasina Banu','designation'=>'Group D','membership_no'=>'21','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213417','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'Inactive','remarks'=>''],
            ['id'=> 43 ,'user_id'=> 0 ,'name'=>'Sabir Ali','designation'=>'Group D','membership_no'=>'64','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010247252','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 44 ,'user_id'=> 0 ,'name'=>'Sk Abdul Aziz','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010249553','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 45 ,'user_id'=> 0 ,'name'=>'Shubankar Bhattacharia','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010327183','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 46 ,'user_id'=> 0 ,'name'=>'Md Ansarul Haque','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010327176','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 47 ,'user_id'=> 0 ,'name'=>'Md Hajekul Sk','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010110597','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 48 ,'user_id'=> 0 ,'name'=>'Md Golam Mozaddid','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010328081','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 49 ,'user_id'=> 0 ,'name'=>'Md Gajikul Islam','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010107090','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 50 ,'user_id'=> 0 ,'name'=>'Md Masum Reja','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010110583','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 51 ,'user_id'=> 0 ,'name'=>'Md Ismail Hoque','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010333757','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 52 ,'user_id'=> 0 ,'name'=>'Md Ziaul Hoque','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010332965','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 53 ,'user_id'=> 0 ,'name'=>'MD SAMSAD HOSSAIN','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010110522','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 54 ,'user_id'=> 0 ,'name'=>'Md Rafiqul Hasan','designation'=>'Asst. Teacher','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010213257','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 55 ,'user_id'=> 0 ,'name'=>'Arjina Khatun','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010110549','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],
            ['id'=> 56 ,'user_id'=> 0 ,'name'=>'Md Rakibul Aziz','designation'=>'Asst. Teacer','membership_no'=>'68','membership_date'=>Null,'pan_no'=>'0','account_no'=>'0977010330954','society_id'=> 1 ,'is_loan_issued'=> 0 ,'status'=>'active','remarks'=>''],



            
        ]);
    }
}
