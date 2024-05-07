/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import {
	RichText,
	MediaUpload,
	useBlockProps,
	InspectorControls
} from '@wordpress/block-editor';
import {
	Button,
	TextControl,
	PanelBody,
	PanelRow,
	ToggleControl,
	ExternalLink
 } from '@wordpress/components';

const Edit = ( props ) => {
	const {
		attributes: { title, mediaID, mediaURL, content, linkUrl, linkLabel },
		setAttributes,
	} = props;

	const blockProps = useBlockProps();

	const onChangeTitle = ( value ) => {
		setAttributes( { title: value } );
	};
	const onSelectImage = ( media ) => {
		setAttributes( {
			mediaURL: media.url,
			mediaID: media.id,
		} );
	};
	const onChangeContent = ( value ) => {
		setAttributes( { content: value } );
	};

	const onChangelinkUrl = ( newlinkUrl ) => {
		setAttributes( { linkUrl: newlinkUrl === undefined ? '' : newlinkUrl } )
	}
	const onChangeLinkLabel = ( newLinkLabel ) => {
		setAttributes( { linkLabel: newLinkLabel === undefined ? '' : newLinkLabel } )
	}

	return (
		<div { ...blockProps }>
			<InspectorControls>
			<PanelBody
				title={ __( 'Link Settings', 'telescope-blocks' )}
				initialOpen={true}
			>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Link URL', 'telescope-blocks' )}
							value={ linkUrl }
							onChange={ onChangelinkUrl }
							help={ __( 'Add the url of your link', 'telescope-blocks' )}
						/>
					</fieldset>
				</PanelRow>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Link label', 'telescope-blocks' )}
							value={ linkLabel }
							onChange={ onChangeLinkLabel }
						/>
					</fieldset>
				</PanelRow>
			</PanelBody>
			</InspectorControls>
			<div className="hero-content-container">
				<div className="hero-inner-container">
					<div className="hero-image">
						{ mediaURL && (
							<img
								src={ mediaURL }
								alt={ __( 'Upload Image', 'telescope-blocks') }
							/>
						) }
					</div>
					<div className="hero-content-wrapper">
						<MediaUpload
							onSelect={ onSelectImage }
							allowedTypes="image"
							value={ mediaID }
							render={ ( { open } ) => (
								<Button
									className={
										mediaID ? 'image-button' : 'button button-large'
									}
									onClick={ open }
								>
									{ ! mediaID ? (
										__( 'Upload Image', 'telescope-blocks' )
									) : (
										__( 'Edit Image', 'telescope-blocks' )
									) }
								</Button>
							) }
						/>
						<RichText
							tagName="h1"
							className="hero-title"
							placeholder={ __(
								'Write your title...',
								'telescope-blocks'
							) }
							value={ title }
							onChange={ onChangeTitle }
						/>
						<RichText
							tagName="div"
							multiline="p"
							className="hero-text"
							placeholder={ __(
								'Write your text...',
								'telescope-blocks'
							) }
							value={ content }
							onChange={ onChangeContent }
						/>
						<ExternalLink
							href={ linkUrl }
							className="hero-link"
							rel="nofollow noopener noreferrer"
						>
							{ linkLabel }
						</ExternalLink>
					</div>
				</div>
			</div>
		</div>
	);
};

export default Edit;
