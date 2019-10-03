<?php

namespace spec\Ekkinox\BDD;

use Ekkinox\BDD\BankAccount;
use PhpSpec\ObjectBehavior;

class BankAccountSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(BankAccount::class);
    }

    function it_can_set_and_get_a_balance(): void
    {
        $this->getBalance()->shouldReturn(0);
        $this->setBalance(100)->shouldReturn($this);
        $this->getBalance()->shouldReturn(100);
    }

    function it_can_handle_a_deposit_operation(): void
    {
        $this->getBalance()->shouldReturn(0);
        $this->makeDeposit(100)->shouldReturn($this);
        $this->getBalance()->shouldReturn(100);
        $this->makeDeposit(100)->shouldReturn($this);
        $this->getBalance()->shouldReturn(200);
    }

    function it_can_handle_a_withdraw_operation(): void
    {
        $this->getBalance()->shouldReturn(0);
        $this->setBalance(200)->shouldReturn($this);
        $this->getBalance()->shouldReturn(200);
        $this->makeWithdraw(100)->shouldReturn($this);
        $this->getBalance()->shouldReturn(100);
        $this->makeWithdraw(100)->shouldReturn($this);
        $this->getBalance()->shouldReturn(0);
    }
}
