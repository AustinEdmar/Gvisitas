1 - tabelas do video


<!-- \
 $table->string('last_name')->nullable();//add
            $table->string('birthday')->nullable(); //add
            /*  $table->rememberToken();  removi*/
            $table->string('confirmation_token')->nullable(); add
             -->


1 - como no video, o confirmation_token sera usado para confirmar o perfil do user
 <!--  Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('confirmation_token')->nullable(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->timestamps(); -->
2 - agora vou na tabela password_resets
deixo como esta




































