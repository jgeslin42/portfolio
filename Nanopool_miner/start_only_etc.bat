setx GPU_FORCE_64BIT_PTR 0
setx GPU_MAX_HEAP_SIZE 100
setx GPU_USE_SYNC_OBJECTS 1
setx GPU_MAX_ALLOC_PERCENT 100
setx GPU_SINGLE_ALLOC_PERCENT 100

EthDcrMiner64.exe -epool etc-eu1.nanopool.org:19999 -ewal YOUR_WALLET_ADDRESS/YOUR_WORKER/YOUR_EMAIL -epsw x -etht 1000 -mode 1 -ftime 10
pause