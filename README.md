# aggiuntoun nuovo film (ant-man) da terminale usando questi comandi 

- php artisan tinker
- $movie = new App\Models\Movie (ho scritto il percorso perchè mi dava una specie di warning se mettevo solo "new Movie")
- $movie->title = 'lorem etc'
- $movie->lorem.. = '...' cosi via fino a rempire i campi ed infine fare..
- $movie->save();

## PS dal database ho dovuto disabilitare nelle "Variables" => "sql mode" => "​NO_ZERO_DATE" per aggiungere le colonne 'created_at' e 'updated_at' con entrambi type DATETIME
