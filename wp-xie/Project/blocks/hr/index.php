<?php

function hr_register_block() {
	if ( ! function_exists( 'register_block_type' ) ) {
		
		return;
	}
	
	register_block_type( __DIR__ );

	if ( function_exists( 'wp_set_script_translations' ) ) {
		$block = json_decode(file_get_contents( __DIR__ . '/block.json' ));
		wp_set_script_translations( str_replace('/', '-', $block->name).'-editor-script', LANG_DOMAIN );
	}

}

add_action('init', 'hr_register_block');

/**
 * VISUALIZZARE IL NUOVO BLOCCO NELLA LISTA DEI BLOCCHI 
 * preparare l'ambiente di lavoro installando e aggiornando le cose necessarie
 * creato una copia di un tema già esistente
 * dentro creare una cartella blocks 
 * dentro nuova carella con il nome del nuovo blocco
 * da terminale entrare nella cartella ed eseguire npm init
 * Setting up build and start scripts
 * install packages
 * creati e modificati i file index.php e block.json nella carella del blocco
 * nella stessa cartella -> nuova cartella 'src' -> creare e modificare index.js
 * includere il nuovo blocco in function.php nella cartella del tema
 *  
 * MODIFICARE IL BLOCCO IN MODO CHE VISUALIZZI HR
 * modificato index.js in src in modo che visualizzi hr
 * aggiunto 2 range control per l'altezza e la larghezza nella sezione settings
 * che andranno a modificare i rispettivi attributi assegnatin in precedenza
 */