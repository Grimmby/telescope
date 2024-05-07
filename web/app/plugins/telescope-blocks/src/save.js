/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { RichText, useBlockProps } from '@wordpress/block-editor';

const Save = ( props ) => {
	const {
		attributes: { title, mediaURL, content, linkUrl, linkLabel, hasLinkNofollow },
	} = props;

	const blockProps = useBlockProps.save();
	return (
		<div { ...blockProps }>
			<div className="hero-content-container">
				<div className="hero-inner-container">
					<div className="hero-image">
						{ mediaURL && (
							<img
								className="image"
								src={ mediaURL }
								alt={ __( 'Hero banner image', 'telescope-blocks' ) }
							/>
						) }
					</div>

					<div className="hero-content-wrapper">
						<RichText.Content tagName="h1" value={ title } className="hero-title" />
						<RichText.Content
							tagName="div"
							className="hero-text"
							value={ content }
						/>
						<a href={ linkUrl }
							className="hero-link"
							rel="nofollow noopener noreferrer"
						>
							{ linkLabel }
						</a>
					</div>
				</div>
			</div>
		</div>
	);
};

export default Save;
