define(
[	
	"backbone",
	"com/tutomvc/component/button/BBButton",
	"com/tutomvc/wpadmin/view/meta/components/field/input/attachment/AttachmentItem",
	"com/tutomvc/wpadmin/view/components/ArrangeableList",
	"com/tutomvc/component/form/Input"
],
function( Backbone, Button, AttachmentItem, ArrangeableList, Input )
{
	var AttachmentList = ArrangeableList.extend({
		tagName : "div",
		className : "AttachmentList cf",
		itemSelector : ".AttachmentItem",
		handleSelector : "img",
		initialize : function(options)
		{
			// Model
			if(!this.model) this.model = new AttachmentList.Model();
			else this.model = new AttachmentList.Model( this.model.toJSON() );
			if(!this.collection)
			{
				this.collection = new Backbone.Collection([], {
					model : AttachmentItem.Model
				});
			}
			// View
			this.addButton = new Button({
				className : "AddButton"
			});
			this.$el.append( this.addButton.$el );
			this.wpMedia = wp.media({
			    title: this.model.get("title"),
			    multiple: this.model.get("maxCardinality") < 0 || this.model.get("maxCardinality") > 1 ? true : false,
			    library: this.model.get("filter") ? { type: this.model.get("filter") } : undefined,
			    button : { text : this.model.get("buttonTitle") },
			    frame: 'select'
			});
			// Controller
			this.listenTo( this.collection, "add", this.onAdd );
			this.listenTo( this.collection, "change", this.render );
			this.listenTo( this.collection, "remove", this.render );
			this.listenTo( this.collection, "add", this.render );
			this.listenTo( this.model, "change:name", this.onNameChange );
			this.listenTo( this.wpMedia, "select", this.onWPMediaSelect );
			this.on( "focus", this.onAddClick );

			var attachments = this.model.get("value");
			for(var p in attachments)
			{
				// IE8 bugfix
				if(attachments[p].id)
				{
					this.collection.add({
						attachmentID : attachments[p].id,
						title : attachments[p].title,
						thumbnailURL : attachments[p].thumbnailURL,
						iconURL : attachments[p].iconURL,
						editURL : attachments[p].editURL,
						name : this.model.get("name")
					});
				}
			}
		},
		render : function()
		{
			if(this.collection.length >= this.model.get("maxCardinality") && this.model.get("maxCardinality") >= 0) this.addButton.$el.addClass( "HiddenElement" );
			else this.addButton.$el.removeClass( "HiddenElement" );

			var value = [];
			this.collection.each(function(model)
				{
					value.push( model.get("attachmentID") );
				});
			this.model.set( {value:value} );

			return this;
		},

		// EVENTS
		events : {
			"click .AddButton" : "onAddClick",
		},
		onNameChange : function(model, value)
		{
			this.collection.invoke( "set", {name:value} );
		},
		onAddClick : function()
		{
			if(this.collection.length >= this.model.get("maxCardinality") && this.model.get("maxCardinality") >= 0) return;

			this.wpMedia.open();
		},
		onAdd : function( model )
		{
			var item = new AttachmentItem({
				model : model
			});
			this.addButton.$el.before( item.el );
		},
		onWPMediaSelect : function(e)
		{
			var selection = this.wpMedia.state().get('selection');
			var _this = this;
			selection.each(function(attachment)
			{
				if(_this.model.get("maxCardinality") < 0 || _this.collection.length < _this.model.get("maxCardinality"))
				{
					_this.collection.add( {
						attachmentID : attachment.id,
						title : attachment.attributes.filename,
						thumbnailURL : attachment.attributes.sizes ? attachment.attributes.sizes.thumbnail.url : null,
						iconURL : attachment.attributes.icon,
						editURL : attachment.attributes.editLink,
						name : _this.model.get("name")
					} );
				}
			});
		},
	},
	{
		Model : Input.Model.extend({
			defaults : {
				title : null,
				buttonTitle : "Select",
				maxCardinality : -1,
				filter : null,
			}
		})
	});

	return AttachmentList;
});