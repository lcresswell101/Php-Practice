<?php

namespace Session;

class SessionManager implements SessionInterface
{
    public function __construct()
    {
        echo 'hello';
        session_start();
    }

    public function get($key): mixed
    {
        if ($this->has($key)) {
            return $_SESSION[$key];
        }

        return null;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this|SessionInterface
     */
    public function set(string $key, mixed $value): SessionInterface|SessionManager
    {
        $_SESSION[$key] = $value;

        return $this;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this|SessionInterface
     */
    public function append(string $key, mixed $value): SessionInterface|SessionManager
    {
        $_SESSION[$key][] = $value;

        return $this;
    }

    public function remove(string $key): void
    {
        if ($this->has($key)) {
            unset($_SESSION[$key]);
        }
    }

    public function clear(): void
    {
        session_unset();
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $_SESSION);
    }
}