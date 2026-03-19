<?php

namespace APP\Enums;


enum EstadoPedido{

case pendiente;
case enviado;
case entregado;
case cancelado;


public function descripcion(): string {
    return match($this) {
        EstadoPedido::pendiente => 'El pedido está pendiente de ser procesado.',
        EstadoPedido::enviado => 'El pedido ha sido enviado al cliente.',
        EstadoPedido::entregado => 'El pedido ha sido entregado al cliente.',
        EstadoPedido::cancelado => 'El pedido ha sido cancelado.',
    };


}
}



?>
