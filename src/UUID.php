<?php
namespace GollumSF\UUID;

class UUID implements UUIDInterface
{
    /** @var string */
    private $uuid;

    public function __construct(string $uuid = null)
    {
        $s4 = function () {
            return substr(dechex((mt_rand(1000000000, 2000000000) / 1000000000) * hexdec('10000')) , 1);
        };
        $this->uuid = $uuid ? $uuid : ($s4() . $s4() . '-' . $s4() . '-' . $s4() . '-' . $s4() . '-' . substr(dechex(microtime(true) * 1000) , 1));
        if (!preg_match('/^[a-f0-9]{8}\-[a-f0-9]{4}\-[a-f0-9]{4}\\-[a-f0-9]{4}\-[a-f0-9]{10}$/', $this->uuid)) {
            throw new \LogicException('UUID not valid');
        }
    }

    public function __toString(): string
    {
        return $this->uuid;
    }
}
