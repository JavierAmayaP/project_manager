<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getFirstProject()
    {
        $firstUser = Project::findOrFail(1);
        return $firstUser;
    }


    public function getAllProjects()
    {
        $project = Project::all();
        return $project;
    }

    public function insertProject()
    {
        $project = new Project;
        $project->user_id = 1;
        $project->city_id = 2;
        $project->company_id = 2;
        $project->name = "Proyecto de ejemplo";
        $project->execution_date = '2020-04-30';
        $project->is_activate = 0;
        $project->save();

        return "Registro Guardado";
    }

    public function updateProject()
    {
        $project = Project::findOrFail(2);
        $project->name = 'Proyecto de Tecnología';
        $project->save();

        return "Actualizado";
    }

    public function renameInactiveProjects()
    {
        $project = Project::where('is_activate', 0)
                          ->update(['name' => 'Projecto inactivo']);
        return "Projectos Renombrados";
    }

    public function deleteFirstTenProject(){
        $proyect = Project::where('id', '<=',10)->delete();
        return "Registros Eliminados";
    }

    public function getLastTenRegisters()
    {
        $lastTenRegisters = Project::orderBy('id', 'desc')
            ->take(10)
            ->get();
        return $lastTenRegisters;
    }
}
