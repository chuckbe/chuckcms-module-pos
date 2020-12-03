<?php

namespace Chuckbe\ChuckcmsModulePos\Commands;

use Chuckbe\Chuckcms\Chuck\ModuleRepository;
use Illuminate\console\Command;

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

        $this->moduleRepository = $moduleRepository
    }

    /**
     * Execute the console command.
     * 
     * @return mixed
     */
    public function handle()
    {
        $name = 'ChuckCMS POS Module';
        $slug = 'chuckcms-module-pos';
        $hintpath = 'chuckcms-module-pos';
        $path = 'chuckbe/chuckcms-module-ecommerce';
        $type = 'module';
        $version = '0.0.1';
        $author = 'Karel Brijs (karel@chuck.be)';

        $json = [];
        $json['admin']['show_in_menu'] = true;
        $json['admin']['menu'] = array(
                'name' => 'POS',
                'icon' => 'shopping-cart',
                'route' => '#',
        )

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