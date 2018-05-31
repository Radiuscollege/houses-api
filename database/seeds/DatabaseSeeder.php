<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->insert([
            'name'  =>  'Variable Vikings',
            'singular' => 'viking',
            'description' =>  'As the last remnants of the Old World, these humans still fight for bringing back the world they lost in the big apocalypse better known as the ‘Stack Overflow’. Few humans survived thanks to a powerful exception handler built by the hands of the Variable Vikings. Now they seek revenge. The Variable Vikings are known of using every tool at their disposal, whether this is Javascript, Python, Lua, or the old world ‘legendary languages’ such as C, Cobol, Delphi, Pascal and Basic.'
        ]);
        DB::table('houses')->insert([
            'name' => 'Script Serpents',
            'singular' => 'serpent',
            'description' => 'Vile creatures from the underworld code labyrinth. In the ‘old world’ also referred to as ‘Spaghetti code’. In ‘The Coding Conflict’ they get the job done fast as they rush into enemy territory, leaving an untraceable mess with the use of their extremely powerful PHP functions such as explode() and chop(). World Anarchy is their aspiration, and they seek to array_split() the world into fragments.'
        ]);
        DB::table('houses')->insert([
            'name'          => 'Recursive Ravens',
            'singular'      => 'raven',
            'description'   => 'Legend says if you see a Recursive Raven use code, you get trapped into the arms of the endless repeating twilight. Armed with a very powerful language called C#, they were the inititiator of the apocalypse of the Old World, better known as the ‘Stack Overflow’, leaving the Old World flooded with data, and cause the beginning of the new Era, the kingdom of Null. With their gigantic command control called ‘Visual Studio’, they are the current commanders of Null.'
        ]);
        DB::table('houses')->insert([
            'name'          => 'Database Dragons',
            'singular'      => 'dragon',
            'description'   => 'Armed with the most vicious of queries, the database dragons leave no table unjoined in ‘The Coding Conflict’. They do not care about the eternal debate because they know good storage of data is the primary key to succes. The database dragons fight for more use of views and triggers so only selected warriors have access to their wisdom. They believe in a world of structure and relations. Protecting the integrity of the data, normalized and lined up in rows and colums, the Database Dragons are a force to be reckoned with. '
        ]);

        DB::table('profiles')->insert([
            'studentnr' => 'd111111',
            'house_id'  => 3,
            'points'    => 6
        ]);

        DB::table('profiles')->insert([
            'studentnr' => 'd111112',
            'house_id'  => 2,
            'points'    => 9
        ]);

        DB::table('profiles')->insert([
            'studentnr' => 'd111113',
            'house_id'  => 1,
            'points'    => 12
        ]);

        DB::table('profiles')->insert([
            'studentnr' => 'd111114',
            'house_id'  => 4,
            'points'    => 3
        ]);

        DB::table('profiles')->insert([
            'studentnr' => 'd111115',
            'house_id'  => 2,
            'points'    => 14
        ]);

        DB::table('logs')->insert([
            'profile_id'    => 'd111115',
            'giver_id'      => '',
            'body'          => 'Fedde assigned 5 points to Dave for asking good questions.'
        ]);

        DB::table('logs')->insert([
            'profile_id'    => 'd111114',
            'giver_id'      => '',
            'body'          => 'Bart assigned 3 points to Jeffrey for being well prepared.'
        ]);

        DB::table('badges')->insert([
            'name'          => "Hello World!",
            'description'   => "Heeft zich als house member aangemeld",
            'img_path'      => ''
        ]);

        DB::table('badges')->insert([
            'name'          => "Open Source Contributor.",
            'description'   => "Heeft een aanzienlijke bijdrage geleverd aan een open source project",
            'img_path'      => ''
        ]);

        DB::table('badge_profile')->insert([
            'profile_id'    => 'd111114',
            'badge_id'      => '1'
        ]);

        DB::table('badge_profile')->insert([
            'profile_id'    => 'd111111',
            'badge_id'      => '1'
        ]);

        DB::table('badge_profile')->insert([
            'profile_id'    => 'd111112',
            'badge_id'      => '1'
        ]);

        DB::table('badge_profile')->insert([
            'profile_id'    => 'd111112',
            'badge_id'      => '2'
        ]);
    }
}
