<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
        });

        DB::table('matieres')->insert([
            ['nom' => 'Algorithmique & Programmation 1'], //1

            ['nom' => 'Systèmes d’exploitation 1'], //2

            ['nom' => 'Communication écrite et orale'], //3

            ['nom' => 'Anglais technique'], //4

            ['nom' => 'Mathématiques appliquées'], //5

            ['nom' => 'Base de données 1'], //6

            ['nom' => 'Base de données 2'], //7

            ['nom' => 'Gestion de projet'], //8

            ['nom' => 'Algorithmique & Programmation 2'], //9

            ['nom' => 'Systèmes d’exploitation 2'], //10

            ['nom' => 'Mathématiques pour l’informatique'], //11

            ['nom' => 'Bureautique'], //12

            ['nom' => 'Réseaux 1 (TCP/IP, OSI…)'], //13

            ['nom' => 'Réseaux 2 (Routage, Cisco…)'], //14

            ['nom' => 'Architecture des ordinateurs'], //15

            ['nom' => 'Programmation Orientée Objet (Java)'], //16

            ['nom' => 'Programmation Web 1'], //17

            ['nom' => 'Programmation Mobile'], //18

            ['nom' => 'UML / Modélisation'], //19

            ['nom' => 'Web Fullstack'], //20

            ['nom' => 'Programmation Mobile avancée'], //21

            ['nom' => 'Design Patterns / Archi Logicielle'], //22

            ['nom' => 'Sécurité Informatique'], //23

            ['nom' => 'Introduction aux réseaux'], //24

            ['nom' => 'Admin Systèmes 1 (Linux)'], //25

            ['nom' => 'Sécurité réseaux 1'], //26

            ['nom' => 'Télécom'], //27

            ['nom' => 'Réseaux 3 (VPN, DNS…)'], //28

            ['nom' => 'Admin Systèmes 2 (Windows)'], //29

            ['nom' => 'Sécurité réseaux 2'], //30

            ['nom' => 'Supervision / Monitoring'], //31

            ['nom' => 'Virtualisation & Cloud'], //32

            ['nom' => 'Design Graphique'], //33

            ['nom' => 'Infographie 2D'], //34

            ['nom' => 'Infographie 3D'], //35

            ['nom' => 'Animation / Montage vidéo'], //36

            ['nom' => 'Audio numérique'], //37

            ['nom' => 'Droit d’auteur / Éthique'], //38

            ['nom' => 'Dev Web Multimédia'], //39

            ['nom' => 'Dev Mobile / Interactivité'], //40

            ['nom' => 'Modélisation 3D avancée'], //41

            ['nom' => 'VFX / Effets spéciaux'], //42

            ['nom' => 'Portfolio / Projet'], //43

            ['nom' => 'Game Dev (Unity / Unreal)'], //44

            ['nom' => 'Design UI/UX'], //45

            ['nom' => 'Contenu Digital / Pub'], //46
            
            ['nom' => 'Réalité virtuelle / AR'], //47

            ['nom' => 'Économie Générale'], //48
            
            ['nom' => 'Comptabilité Générale 1'], //49

            ['nom' => 'Informatique de gestion'], //50

            ['nom' => 'Méthodologie universitaire'], //51

            ['nom' => 'Comptabilité Générale 2'], //52

            ['nom' => 'Droit Commercial'], //53

            ['nom' => 'Statistiques descriptives'], //54

            ['nom' => 'Organisation des entreprises'], //55

            ['nom' => 'Comptabilité Analytique'], //56

            ['nom' => 'Marketing fondamental'], //57

            ['nom' => 'GRH'], //58

            ['nom' => 'TQG'], //59

            ['nom' => 'Fiscalité'], //60

            ['nom' => 'Logiciels de gestion'], //61

            ['nom' => 'Analyse financière'], //62

            ['nom' => 'Management stratégique'], //63

            ['nom' => 'Audit & Contrôle de gestion'], //64

            ['nom' => 'Simulation de gestion'], //65

            ['nom' => 'Projet / Étude de cas'], //66
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
