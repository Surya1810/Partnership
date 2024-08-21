<?php

namespace App\Imports;

use App\Models\Project;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProjectImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $project = Project::where('name', $row['name'])->first();
            if ($project) {

                $project->update([
                    'name' => $row['name'],
                    'company' => $row['company'],
                    'year' => $row['year'],
                    'desc' => $row['desc'],
                ]);
            } else {

                Project::create([
                    'name' => $row['name'],
                    'company' => $row['company'],
                    'year' => $row['year'],
                    'desc' => $row['desc'],
                ]);
            }
        }
    }
}
