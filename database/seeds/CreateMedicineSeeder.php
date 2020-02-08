<?php

use Illuminate\Database\Seeder;

class CreateMedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicines = ['Eporen', 'Epotrex', 'Renagen', 'Transikahtrex'];
        try {
            \Illuminate\Support\Facades\DB::beginTransaction();
            foreach ($medicines as $m){
                $model = new \App\Models\Medicine;
                $model->name = $m;
                if (!$model->save()){
                    \Illuminate\Support\Facades\DB::rollBack();
                }
            }
            \Illuminate\Support\Facades\DB::commit();
            echo 'Succeed';
            return true;
        }catch (Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
}
