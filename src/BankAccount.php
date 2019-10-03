<?php

namespace Ekkinox\BDD;

class BankAccount
{
    /** @var int */
    private $balance = 0;

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function setBalance(int $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function makeDeposit(int $amount): self
    {
        $this->balance += $amount;

        return $this;
    }

    public function makeWithdraw(int $amount): self
    {
        $this->balance -= $amount;

        return $this;
    }
}
