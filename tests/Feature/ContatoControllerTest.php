<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Mockery;
use App\Services\SiteContatoService;

class ContatoControllerTest extends TestCase
{
    protected $service;

    protected function setUp(): void
    {
        parent::setUp();

        $this->service = Mockery::mock(SiteContatoService::class);

        $this->app->instance(SiteContatoService::class, $this->service);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    /** @test */
    public function deve_mostrar_pagina_de_contato()
    {
        $response = $this->get(route('site.contato'));

        $response->assertStatus(200);

        $response->assertViewIs('site.contato');
    }

    /** @test */
    public function deve_salvar_contato_com_sucesso()
    {
        $dados = [
            'nome' => 'João Silva',
            'telefone' => '11999999999',
            'email' => 'joao@email.com',
            'motivo_contato' => '1',
            'mensagem' => 'Mensagem de teste'
        ];

        $this->service
            ->shouldReceive('criar')
            ->once()
            ->with($dados)
            ->andReturn(true);

        $response = $this->post(route('site.contato.store'), $dados);

        $response->assertRedirect(route('site.contato'));

        $response->assertSessionHas(
            'success',
            'Mensagem enviada com sucesso!'
        );
    }

    /** @test */
    public function nao_deve_salvar_contato_com_dados_invalidos()
    {
        $response = $this->post(route('site.contato.store'), []);

        $response->assertSessionHasErrors([
            'nome',
            'telefone',
            'email',
            'motivo_contato',
            'mensagem'
        ]);
    }
}