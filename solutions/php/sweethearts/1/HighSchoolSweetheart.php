<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $nameTrimmed = trim($name);
        return $nameTrimmed[0];
    }

    public function initial(string $name): string
    {
        $primeiraLetra = strtoupper($this->firstLetter($name));        
        return "{$primeiraLetra}.";
    }

    public function initials(string $name): string
    {
        $palavras = explode(" ", trim($name));
        return "{$this->initial($palavras[0])} {$this->initial($palavras[1])}";
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $primeiraInicial = $this->initials($sweetheart_a);
        $segundaInicial = $this->initials($sweetheart_b);
        $coracao = "     ******       ******\n".
                   "   **      **   **      **\n".
                   " **         ** **         **\n".
                   "**            *            **\n".
                   "**                         **\n".
                   "**     {$primeiraInicial}  +  {$segundaInicial}     **\n".
                   " **                       **\n".
                   "   **                   **\n".
                   "     **               **\n".
                   "       **           **\n".
                   "         **       **\n".
                   "           **   **\n".
                   "             ***\n".
                   "              *";       
        return $coracao;
    }
}

