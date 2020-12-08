<?php

namespace Chuckbe\ChuckcmsModulePos\Commands;

use Chuckbe\Chuckcms\Chuck\ModuleRepository;
use Illuminate\console\Command;
use Chuckbe\Chuckcms\Models\Module;

class InstallModulePos extends Command 
{
    /**
     * the name and signature of the console command
     * 
     * @var string
     */
    protected $signature = 'chuckcms-module-pos:install';

    /**
     * The console command description
     * 
     * @var string
     */
    protected $description = 'This command installs the ChuckCMS Pos Module.';

    /**
     * The module repository implementation
     * 
     * @var ModuleRespository
     */
    protected $moduleRepository;

    /**
     * Create a new command instance
     * 
     * @return void
     */
    public function __contruct(ModuleRepository $moduleRepository)
    {
        parent::__construct();

        $this->moduleRepository = $moduleRepository;
    }

    /**
     * Execute the console command.
     * 
     * @return mixed
     */
    public function handle()
    {

        $json = [];
        $json['admin']['menu']['submenu']['seventh']['name'] = 'POS';
        $json['admin']['menu']['submenu']['seventh']['icon'] = true;
        $json['admin']['menu']['submenu']['seventh']['icon_data'] = 'printer';
        $json['admin']['menu']['submenu']['seventh']['route'] = 'dashboard.module.pos.index';
        $json['admin']['menu']['submenu']['seventh']['has_submenu'] = false;
        $json['admin']['menu']['submenu']['seventh']['submenu'] = null;
        
        $module = Module::where('slug', 'chuckcms-module-ecommerce')->firstOrFail();

        $data = $module->json;

        $merge = array_merge($data['admin']['menu']['submenu'], $json['admin']['menu']['submenu']); 

        $data['admin']['menu']['submenu'] = $merge;

        $module->json = $data;

        $module->update();

        // dd($data);
        


        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('.... AWESOME ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   JOB   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info(' ');
        $this->info('Module installed: ChuckCMS POS');
        $this->info(' ');
    }
}