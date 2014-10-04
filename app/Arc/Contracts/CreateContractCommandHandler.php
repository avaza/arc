<?php namespace Arc\Contracts;

use Laracasts\Commander\CommandHandler;
use Arc\Contracts\ContractRepository;
use Arc\Contracts\Contract;
use Laracasts\Commander\Events\DispatchableTrait;

class CreateContractCommandHandler implements CommandHandler {

    use DispatchableTrait;
    protected $repository;

    function __construct(ContractRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $contract = Contract::generate($command->attributes);

        $this->repository->save($contract);

        $this->dispatchEventsFor($contract);

        return $contract;
    }
}