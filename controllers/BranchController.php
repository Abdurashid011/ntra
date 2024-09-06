<?php

declare(strict_types=1);

namespace Controller;

use App\Branch;

class BranchController
{

    public Branch $branch;

    public function __construct()
    {
        $this->branch = new Branch();
    }

    public function create(): void
    {
        $title       = $_POST['name'];
        $address     = $_POST['address'];

        $branch = ($this->branch)->createBranch($title, $address);
        redirect('/admin');
    }

    public function branches(): void
    {
        $branches = ($this->branch)->getBranches();
        loadView('dashboard/branches', ['branches' => $branches]);
    }

}