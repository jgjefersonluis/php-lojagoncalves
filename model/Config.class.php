<?php

class Config
{
    // INFORMAÇÕES BASICAS DO SITE

    const SITE_URL = "http://localhost";
    const SITE_PASTA = "lojagoncalves";
    // const SITE_PASTA = ""; -> na raiz do servidor
    const SITE_NOME = "Loja Gonçalves";
    const SITE_EMAIL_ADM = "jefersonluis.educx@gmail.com";

    //INFORMAÇÕES DO BANCO DE DADOS
    const BD_HOST = "localhost",
        BD_USER = "root",
        BD_SENHA = "",
        BD_BANCO = "lojagoncalves",
        BD_PREFIX = "";

    // INFORMAÇÕES PARA PHP MAILLER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "jefersonluis.educx@gmail.com";
    const EMAIL_NOME = "Contato Loja Gonçalves";
    const EMAIL_SENHA = "virginia0711";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_STMPSECURE = "tsl";
    const EMAIL_COPIA = "jefersonluis.educx@gmail.com";
}