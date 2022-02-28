# Cryptocurrency nodes API.

### How to install

```bash
composer require imanrjb/fullnode-api
```

### Put below parameters in <code>.env</code> file

```dotenv
BTC_ENDPOINT=
ETH_ENDPOINT=
BSC_ENDPOINT=
TRX_ENDPOINT=
SOL_ENDPOINT=
MATIC_ENDPOINT=
DOGE_ENDPOINT=
LTC_ENDPOINT=
BCH_ENDPOINT=
XRP_ENDPOINT=
DOT_ENDPOINT=
ADA_ENDPOINT=
EOS_ENDPOINT=
AVAX_ENDPOINT=
XEM_ENDPOINT=
NEO_ENDPOINT=
XLM_ENDPOINT=
DASH_ENDPOINT=
ZEC_ENDPOINT=
XMR_ENDPOINT=

```

### Request to Json RPC API of getblock.io

```php
$node = new \GetBlockApi\GetBlock\GetBlockRpc('btc');
return $node->getblockhash(1000);
```

#### Supported networks:

Network | Symbol
---------------------|--------
Bitcoin              |btc
Ethereum             |eth
Binance Smart Chain  |bsc
Tron                 |trx
Solana               |sol
Polygon              |matic
Doge                 |doge
Litecoin             |ltc
Bitcoin Cash.        |bch
Ripple               |xrp
Polkadot             |dot
Cardano              |ada
EOS                  |eos
Avalanche            |avax
NEM                  |xem
NEO                  |neo
Stellar              |xlm
Dash                 |dash
ZCash                |zec
Monero               |xmr
