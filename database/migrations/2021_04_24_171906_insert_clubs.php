<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertClubs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('América Mineiro','AME','ame.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Athletico Paranaense','CAP','cap.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Atlético Goianiense','ACG','acg.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Atlético Mineiro','CAM','cam.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Bahia','BAH','bah.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Ceará','CEA','cea.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Chapecoense','CHA','cha.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Corinthians','COR','cor.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Cuiabá','CUI','cui.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Flamengo','FLA','fla.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Fluminense','FLU','flu.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Fortaleza','FOR','for.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Grêmio','GRE','gre.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Internacional','INT','int.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Juventude','JUV','juv.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Palmeiras','PAL','pal.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Red Bull Bragantino','BGT','bgt.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Santos','SAN','san.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('São Paulo','SAO','sao.png', now(), now())");
        DB::select("insert into teams(name, initials, icon, created_at, updated_at) values ('Sport','SPT','spt.png', now(), now())");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
