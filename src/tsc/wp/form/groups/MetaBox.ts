import {WPAttachmentFormInput} from "../inputs/WPAttachmentFormInput";

export class MetaBox
{
	private _$el: JQuery;

	constructor( $el: JQuery )
	{
		this._$el = $el;

		this._$el.on( "change", ".fissile-form-group-nuke", ( e ) => this.parse() );
		console.log( "MetaBox" );
	}

	private render( html )
	{
		this._$el.html( html );
		this._$el.find( ".form-input-element.select2" ).each( function() {
			jQuery( this ).select2( jQuery( this ).data() );
		} );
		this._$el.find( ".selectpicker" ).each( function() {
			jQuery( this ).selectpicker( jQuery( this ).data() );
		} );
		this._$el.find( ".wpattachmentforminput" ).each( function() {
			new WPAttachmentFormInput( jQuery( this ), jQuery( this ).data() );
		} );
	}

	private destroy()
	{
		this._$el.find( "textarea.wp-editor-area" ).each( ( i, el ) => {
			console.log( "DESOTRY:", jQuery( el ).attr( "id" ) );
			tinymce.remove( "#" + jQuery( el ).attr( "id" ) );
//			tinymce.execCommand( 'mceRemoveControl', true, jQuery( el ).attr( "id" ) );
		} );
	}

	private parse()
	{
		if( this.$form.length )
		{
			console.log( this.$form[ 0 ] );
			let data        = new FormData( this.$form[ 0 ] );
			let url         = tutomvcParseMBURL + "&mid=" + this.id + "&type=" + this.type;
			var ajaxRequest = jQuery.ajax( url, {
				data:       data,
				method:     "POST",
				contentType:false,
				processData:false,
				success:    ( result ) => {
					console.log( result );
					if( result )
					{
						let $metabox = jQuery( result );
						this.destroy();
						this.render( $metabox.html() );
					}
				},
				error:      result => console.error( result )
			} );
		}
	}

	/* SET AND GET */
	get id(): string
	{
		return this._$el.attr( "id" );
	}

	get $form(): JQuery
	{
		return jQuery( this._$el.closest( "form" ) );
	}

	get type(): string
	{
		if( this._$el.hasClass( "tutomvc-metabox" ) ) return "metabox";
		if( this._$el.hasClass( "tutomvc-user_metabox" ) ) return "user_metabox";
		if( this._$el.hasClass( "tutomvc-settings" ) ) return "settings";
	}
}