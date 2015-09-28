<?php

namespace MyCompany\Console\Commands;

use Illuminate\Console\Command;

class ManageWaitingList extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage:waitinglist';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage the accommodation waiting list.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // TODO: write business logic to manage waiting list
        if ($roomIsAvailableFor($user)) {
            $this->dispatch(new ReserveRoomCommand());
        }
    }

}
