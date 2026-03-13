<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use Mockery;
use App\Services\SiteContatoService;
use App\Repositories\Interfaces\SiteContatoRepositoryInterface;

class SiteContatoServiceTest extends TestCase
{
    protected $repository;
    protected $service;

    protected function setUp(): void
    {
        parent::setUp();

        $this->repository = Mockery::mock(SiteContatoRepositoryInterface::class);

        $this->service = new SiteContatoService($this->repository);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    /** @test */
    public function deve_listar_todos_os_contatos()
    {
        $contatos = [
            ['id' => 1, 'nome' => 'João'],
            ['id' => 2, 'nome' => 'Maria']
        ];

        $this->repository
            ->shouldReceive('getAll')
            ->once()
            ->andReturn($contatos);

        $resultado = $this->service->listarTodos();

        $this->assertEquals($contatos, $resultado);
    }

    /** @test */
    public function deve_buscar_contato_por_id()
    {
        $contato = [
            'id' => 1,
            'nome' => 'João'
        ];

        $this->repository
            ->shouldReceive('findById')
            ->with(1)
            ->once()
            ->andReturn($contato);

        $resultado = $this->service->buscarPorId(1);

        $this->assertEquals($contato, $resultado);
    }

    /** @test */
    public function deve_criar_um_contato()
    {
        $dados = [
            'nome' => 'João',
            'telefone' => '119999999',
            'email' => 'joao@email.com',
            'motivo_contato' => '1',
            'mensagem' => 'Mensagem teste'
        ];

        $this->repository
            ->shouldReceive('create')
            ->once()
            ->with(Mockery::type('array'))
            ->andReturn(true);

        $resultado = $this->service->criar($dados);

        $this->assertTrue($resultado);
    }

    /** @test */
    public function deve_atualizar_um_contato()
    {
        $dados = [
            'nome' => 'João Atualizado',
            'telefone' => '119888888',
            'email' => 'joao@email.com',
            'motivo_contato' => '2',
            'mensagem' => 'Mensagem atualizada'
        ];

        $this->repository
            ->shouldReceive('update')
            ->with(1, Mockery::type('array'))
            ->once()
            ->andReturn(true);

        $resultado = $this->service->atualizar(1, $dados);

        $this->assertTrue($resultado);
    }

    /** @test */
    public function deve_remover_um_contato()
    {
        $this->repository
            ->shouldReceive('delete')
            ->with(1)
            ->once()
            ->andReturn(true);

        $resultado = $this->service->remover(1);

        $this->assertTrue($resultado);
    }

    /** @test */
    public function deve_buscar_contatos_por_condicoes()
    {
        $conditions = [
            'motivo_contato' => '1'
        ];

        $resultadoEsperado = [
            ['id' => 1, 'nome' => 'João']
        ];

        $this->repository
            ->shouldReceive('findBy')
            ->with($conditions)
            ->once()
            ->andReturn($resultadoEsperado);

        $resultado = $this->service->buscarPor($conditions);

        $this->assertEquals($resultadoEsperado, $resultado);
    }
}